<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\GeneralRephotographyDetectionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\GeneralRephotographyDetectionResponseBody\data\result\grounding;

class result extends Model
{
    /**
     * @var grounding
     */
    public $grounding;

    /**
     * @var bool
     */
    public $isFake;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'grounding' => 'Grounding',
        'isFake' => 'IsFake',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->grounding) {
            $this->grounding->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grounding) {
            $res['Grounding'] = null !== $this->grounding ? $this->grounding->toArray($noStream) : $this->grounding;
        }

        if (null !== $this->isFake) {
            $res['IsFake'] = $this->isFake;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Grounding'])) {
            $model->grounding = grounding::fromMap($map['Grounding']);
        }

        if (isset($map['IsFake'])) {
            $model->isFake = $map['IsFake'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
