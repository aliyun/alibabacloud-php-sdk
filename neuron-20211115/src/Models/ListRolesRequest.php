<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListRolesRequest extends Model
{
    /**
     * @var string
     */
    public $authorizerId;

    /**
     * @var string
     */
    public $authorizerType;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var int[]
     */
    public $roleIds;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'authorizerId' => 'authorizerId',
        'authorizerType' => 'authorizerType',
        'enterpriseId' => 'enterpriseId',
        'name' => 'name',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'platform' => 'platform',
        'roleIds' => 'roleIds',
        'roleType' => 'roleType',
    ];

    public function validate()
    {
        if (\is_array($this->roleIds)) {
            Model::validateArray($this->roleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizerId) {
            $res['authorizerId'] = $this->authorizerId;
        }

        if (null !== $this->authorizerType) {
            $res['authorizerType'] = $this->authorizerType;
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        if (null !== $this->roleIds) {
            if (\is_array($this->roleIds)) {
                $res['roleIds'] = [];
                $n1 = 0;
                foreach ($this->roleIds as $item1) {
                    $res['roleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roleType) {
            $res['roleType'] = $this->roleType;
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
        if (isset($map['authorizerId'])) {
            $model->authorizerId = $map['authorizerId'];
        }

        if (isset($map['authorizerType'])) {
            $model->authorizerType = $map['authorizerType'];
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        if (isset($map['roleIds'])) {
            if (!empty($map['roleIds'])) {
                $model->roleIds = [];
                $n1 = 0;
                foreach ($map['roleIds'] as $item1) {
                    $model->roleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['roleType'])) {
            $model->roleType = $map['roleType'];
        }

        return $model;
    }
}
