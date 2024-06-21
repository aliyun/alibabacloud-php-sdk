<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolicyShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 11
     *
     * @var int
     */
    public $actionType;

    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @description This parameter is required.
     *
     * @example c52c2fa6-fdac-40c4-8753-be7c********
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
        'actionType'    => 'ActionType',
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
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
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
     * @return ModifyPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
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
