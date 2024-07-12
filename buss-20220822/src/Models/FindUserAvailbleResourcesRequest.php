<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

class FindUserAvailbleResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $bussinessCode;

    /**
     * @var int
     */
    public $currPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bussinessCode' => 'bussinessCode',
        'currPage'      => 'currPage',
        'pageSize'      => 'pageSize',
        'resourceType'  => 'resourceType',
        'userId'        => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bussinessCode) {
            $res['bussinessCode'] = $this->bussinessCode;
        }
        if (null !== $this->currPage) {
            $res['currPage'] = $this->currPage;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindUserAvailbleResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bussinessCode'])) {
            $model->bussinessCode = $map['bussinessCode'];
        }
        if (isset($map['currPage'])) {
            $model->currPage = $map['currPage'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
