<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetQualityProjectListRequest extends Model
{
    /**
     * @example ccc_xp_pre***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 15
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $checkFreqType;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'projectId'     => 'ProjectId',
        'projectName'   => 'ProjectName',
        'status'        => 'Status',
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
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['checkFreqType'])) {
            $model->checkFreqType = $map['checkFreqType'];
        }

        return $model;
    }
}
