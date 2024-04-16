<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetEnvironmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountOpsEndpoint;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentPublishId;

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
    public $envType;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $publishingId;
    protected $_name = [
        'accountOpsEndpoint' => 'AccountOpsEndpoint',
        'appId'              => 'AppId',
        'createTime'         => 'CreateTime',
        'currentPublishId'   => 'CurrentPublishId',
        'endpoint'           => 'Endpoint',
        'envId'              => 'EnvId',
        'envType'            => 'EnvType',
        'modifiedTime'       => 'ModifiedTime',
        'publishingId'       => 'PublishingId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountOpsEndpoint) {
            $res['AccountOpsEndpoint'] = $this->accountOpsEndpoint;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentPublishId) {
            $res['CurrentPublishId'] = $this->currentPublishId;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->publishingId) {
            $res['PublishingId'] = $this->publishingId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountOpsEndpoint'])) {
            $model->accountOpsEndpoint = $map['AccountOpsEndpoint'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentPublishId'])) {
            $model->currentPublishId = $map['CurrentPublishId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['PublishingId'])) {
            $model->publishingId = $map['PublishingId'];
        }

        return $model;
    }
}
