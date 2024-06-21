<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyContentRequest\content;
use AlibabaCloud\Tea\Model;

class ModifyPolicyContentRequest extends Model
{
    /**
     * @var content
     */
    public $content;

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
        'content' => 'Content',
        'id'      => 'Id',
        'name'    => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
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
     * @return ModifyPolicyContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
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
