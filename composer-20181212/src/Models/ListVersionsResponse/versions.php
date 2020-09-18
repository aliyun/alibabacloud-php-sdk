<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models\ListVersionsResponse;

use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var int
     */
    public $versionName;

    /**
     * @var int
     */
    public $versionStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'versionId'     => 'VersionId',
        'flowId'        => 'FlowId',
        'versionName'   => 'VersionName',
        'versionStatus' => 'VersionStatus',
        'createTime'    => 'CreateTime',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
        Model::validateRequired('versionId', $this->versionId, true);
        Model::validateRequired('flowId', $this->flowId, true);
        Model::validateRequired('versionName', $this->versionName, true);
        Model::validateRequired('versionStatus', $this->versionStatus, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }
        if (null !== $this->versionStatus) {
            $res['VersionStatus'] = $this->versionStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }
        if (isset($map['VersionStatus'])) {
            $model->versionStatus = $map['VersionStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
