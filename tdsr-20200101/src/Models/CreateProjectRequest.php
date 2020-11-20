<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $businessUserIdList;

    /**
     * @var string
     */
    public $gatherUserIdList;

    /**
     * @var string
     */
    public $builderUserIdList;
    protected $_name = [
        'name'               => 'Name',
        'businessId'         => 'BusinessId',
        'businessUserIdList' => 'BusinessUserIdList',
        'gatherUserIdList'   => 'GatherUserIdList',
        'builderUserIdList'  => 'BuilderUserIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->businessUserIdList) {
            $res['BusinessUserIdList'] = $this->businessUserIdList;
        }
        if (null !== $this->gatherUserIdList) {
            $res['GatherUserIdList'] = $this->gatherUserIdList;
        }
        if (null !== $this->builderUserIdList) {
            $res['BuilderUserIdList'] = $this->builderUserIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['BusinessUserIdList'])) {
            $model->businessUserIdList = $map['BusinessUserIdList'];
        }
        if (isset($map['GatherUserIdList'])) {
            $model->gatherUserIdList = $map['GatherUserIdList'];
        }
        if (isset($map['BuilderUserIdList'])) {
            $model->builderUserIdList = $map['BuilderUserIdList'];
        }

        return $model;
    }
}
