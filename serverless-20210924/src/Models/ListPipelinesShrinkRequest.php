<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelSelectorShrink) {
            $res['labelSelector'] = $this->labelSelectorShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelinesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['labelSelector'])) {
            $model->labelSelectorShrink = $map['labelSelector'];
        }

        return $model;
    }
}
