<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListChartReleaseResponseBody;

use AlibabaCloud\Tea\Model;

class chartReleases extends Model
{
    /**
     * @var string
     */
    public $chart;

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
    public $release;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'chart'        => 'Chart',
        'instanceId'   => 'InstanceId',
        'modifiedTime' => 'ModifiedTime',
        'release'      => 'Release',
        'repoId'       => 'RepoId',
        'size'         => 'Size',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->release) {
            $res['Release'] = $this->release;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chartReleases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Chart'])) {
            $model->chart = $map['Chart'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Release'])) {
            $model->release = $map['Release'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
