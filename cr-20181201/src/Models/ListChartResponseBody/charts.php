<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListChartResponseBody;

use AlibabaCloud\Tea\Model;

class charts extends Model
{
    /**
     * @var string
     */
    public $chart;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'chart'        => 'Chart',
        'createTime'   => 'CreateTime',
        'instanceId'   => 'InstanceId',
        'modifiedTime' => 'ModifiedTime',
        'repoId'       => 'RepoId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chart) {
            $res['Chart'] = $this->chart;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return charts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Chart'])) {
            $model->chart = $map['Chart'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
