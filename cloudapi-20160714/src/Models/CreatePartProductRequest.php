<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreatePartProductRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int[]
     */
    public $cateSecondId;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'name'          => 'Name',
        'description'   => 'Description',
        'cateSecondId'  => 'CateSecondId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->cateSecondId) {
            $res['CateSecondId'] = $this->cateSecondId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePartProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CateSecondId'])) {
            if (!empty($map['CateSecondId'])) {
                $model->cateSecondId = $map['CateSecondId'];
            }
        }

        return $model;
    }
}
