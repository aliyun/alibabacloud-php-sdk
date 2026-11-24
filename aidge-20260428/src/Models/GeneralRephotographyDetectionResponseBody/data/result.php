<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\GeneralRephotographyDetectionResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $isFake;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'isFake' => 'IsFake',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['IsFake'])) {
            $model->isFake = $map['IsFake'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
