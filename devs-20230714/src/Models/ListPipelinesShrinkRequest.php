<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ListPipelinesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $labelSelectorShrink;
    protected $_name = [
        'labelSelectorShrink' => 'labelSelector',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelSelectorShrink) {
            $res['labelSelector'] = $this->labelSelectorShrink;
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
        if (isset($map['labelSelector'])) {
            $model->labelSelectorShrink = $map['labelSelector'];
        }

        return $model;
    }
}
