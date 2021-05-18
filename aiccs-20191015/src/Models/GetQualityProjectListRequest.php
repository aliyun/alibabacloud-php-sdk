<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetQualityProjectListRequest extends Model
{
    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 质检项ID
     *
     * @var int
     */
    public $projectId;

    /**
     * @description 质检项名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 质检项状态
     *
     * @var int
     */
    public $status;

    /**
     * @description PageNo
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description PageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 质检频率
     *
     * @var int
     */
    public $checkFreqType;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'projectId'     => 'ProjectId',
        'projectName'   => 'ProjectName',
        'status'        => 'Status',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'checkFreqType' => 'checkFreqType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->checkFreqType) {
            $res['checkFreqType'] = $this->checkFreqType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQualityProjectListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['checkFreqType'])) {
            $model->checkFreqType = $map['checkFreqType'];
        }

        return $model;
    }
}
