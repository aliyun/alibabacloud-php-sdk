<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListEnvironmentOverviewsResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $config;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $currentPublish;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $envStatus;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $latestAppAccessTime;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string[]
     */
    public $opsRecord;

    /**
     * @var string[]
     */
    public $publishing;
    protected $_name = [
        'appId'               => 'AppId',
        'config'              => 'Config',
        'createTime'          => 'CreateTime',
        'currentPublish'      => 'CurrentPublish',
        'endpoint'            => 'Endpoint',
        'envId'               => 'EnvId',
        'envStatus'           => 'EnvStatus',
        'envType'             => 'EnvType',
        'latestAppAccessTime' => 'LatestAppAccessTime',
        'modifiedTime'        => 'ModifiedTime',
        'opsRecord'           => 'OpsRecord',
        'publishing'          => 'Publishing',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentPublish) {
            $res['CurrentPublish'] = $this->currentPublish;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->envStatus) {
            $res['EnvStatus'] = $this->envStatus;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->latestAppAccessTime) {
            $res['LatestAppAccessTime'] = $this->latestAppAccessTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->opsRecord) {
            $res['OpsRecord'] = $this->opsRecord;
        }
        if (null !== $this->publishing) {
            $res['Publishing'] = $this->publishing;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentPublish'])) {
            $model->currentPublish = $map['CurrentPublish'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['EnvStatus'])) {
            $model->envStatus = $map['EnvStatus'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['LatestAppAccessTime'])) {
            $model->latestAppAccessTime = $map['LatestAppAccessTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OpsRecord'])) {
            $model->opsRecord = $map['OpsRecord'];
        }
        if (isset($map['Publishing'])) {
            $model->publishing = $map['Publishing'];
        }

        return $model;
    }
}
