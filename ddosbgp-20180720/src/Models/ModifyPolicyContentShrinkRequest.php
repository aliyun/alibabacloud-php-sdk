<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolicyContentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @description This parameter is required.
     *
     * @example 83967609-7ea5-4f6d-a6ea-380b09e****
     *
     * @var string
     */
    public $id;

    /**
     * @example demo**
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'contentShrink' => 'Content',
        'id'            => 'Id',
        'name'          => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentShrink) {
            $res['Content'] = $this->contentShrink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPolicyContentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->contentShrink = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
