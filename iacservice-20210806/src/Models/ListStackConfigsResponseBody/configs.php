<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs\componentConfig;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponseBody\configs\deploymentConfig;

class configs extends Model
{
    /**
     * @var componentConfig
     */
    public $componentConfig;

    /**
     * @var string
     */
    public $componentContent;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var deploymentConfig
     */
    public $deploymentConfig;

    /**
     * @var string
     */
    public $deploymentContent;

    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'componentConfig' => 'componentConfig',
        'componentContent' => 'componentContent',
        'createTime' => 'createTime',
        'deploymentConfig' => 'deploymentConfig',
        'deploymentContent' => 'deploymentContent',
        'failedReason' => 'failedReason',
        'status' => 'status',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->componentConfig) {
            $this->componentConfig->validate();
        }
        if (null !== $this->deploymentConfig) {
            $this->deploymentConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentConfig) {
            $res['componentConfig'] = null !== $this->componentConfig ? $this->componentConfig->toArray($noStream) : $this->componentConfig;
        }

        if (null !== $this->componentContent) {
            $res['componentContent'] = $this->componentContent;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->deploymentConfig) {
            $res['deploymentConfig'] = null !== $this->deploymentConfig ? $this->deploymentConfig->toArray($noStream) : $this->deploymentConfig;
        }

        if (null !== $this->deploymentContent) {
            $res['deploymentContent'] = $this->deploymentContent;
        }

        if (null !== $this->failedReason) {
            $res['failedReason'] = $this->failedReason;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['componentConfig'])) {
            $model->componentConfig = componentConfig::fromMap($map['componentConfig']);
        }

        if (isset($map['componentContent'])) {
            $model->componentContent = $map['componentContent'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['deploymentConfig'])) {
            $model->deploymentConfig = deploymentConfig::fromMap($map['deploymentConfig']);
        }

        if (isset($map['deploymentContent'])) {
            $model->deploymentContent = $map['deploymentContent'];
        }

        if (isset($map['failedReason'])) {
            $model->failedReason = $map['failedReason'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
