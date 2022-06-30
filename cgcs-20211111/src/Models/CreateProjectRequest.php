<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateProjectRequest\projectQuotaLimit;
use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @var string[]
     */
    public $boundAppIdList;

    /**
     * @description 请求操作人Id
     *
     * @var string
     */
    public $operatorId;

    /**
     * @description 请求操作人类型
     *
     * @var string
     */
    public $operatorType;

    /**
     * @var string
     */
    public $projectMemo;

    /**
     * @description project name
     *
     * @var string
     */
    public $projectName;

    /**
     * @description key : districtId
     *
     * @var projectQuotaLimit
     */
    public $projectQuotaLimit;
    protected $_name = [
        'boundAppIdList'    => 'BoundAppIdList',
        'operatorId'        => 'OperatorId',
        'operatorType'      => 'OperatorType',
        'projectMemo'       => 'ProjectMemo',
        'projectName'       => 'ProjectName',
        'projectQuotaLimit' => 'ProjectQuotaLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boundAppIdList) {
            $res['BoundAppIdList'] = $this->boundAppIdList;
        }
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->projectMemo) {
            $res['ProjectMemo'] = $this->projectMemo;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectQuotaLimit) {
            $res['ProjectQuotaLimit'] = null !== $this->projectQuotaLimit ? $this->projectQuotaLimit->toMap() : null;
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
        if (isset($map['BoundAppIdList'])) {
            if (!empty($map['BoundAppIdList'])) {
                $model->boundAppIdList = $map['BoundAppIdList'];
            }
        }
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['ProjectMemo'])) {
            $model->projectMemo = $map['ProjectMemo'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectQuotaLimit'])) {
            $model->projectQuotaLimit = projectQuotaLimit::fromMap($map['ProjectQuotaLimit']);
        }

        return $model;
    }
}
