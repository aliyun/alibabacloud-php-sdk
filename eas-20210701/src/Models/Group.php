<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class Group extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $queueService;

    /**
     * @var string
     */
    public $trafficMode;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'clusterId' => 'ClusterId',
        'createTime' => 'CreateTime',
        'internetEndpoint' => 'InternetEndpoint',
        'intranetEndpoint' => 'IntranetEndpoint',
        'name' => 'Name',
        'queueService' => 'QueueService',
        'trafficMode' => 'TrafficMode',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }

        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->queueService) {
            $res['QueueService'] = $this->queueService;
        }

        if (null !== $this->trafficMode) {
            $res['TrafficMode'] = $this->trafficMode;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }

        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['QueueService'])) {
            $model->queueService = $map['QueueService'];
        }

        if (isset($map['TrafficMode'])) {
            $model->trafficMode = $map['TrafficMode'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
