<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveStreamMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $inputList;

    /**
     * @var string
     */
    public $monitorId;

    /**
     * @var string
     */
    public $monitorName;

    /**
     * @var string
     */
    public $outputTemplate;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $stream;
    protected $_name = [
        'app'            => 'App',
        'domain'         => 'Domain',
        'inputList'      => 'InputList',
        'monitorId'      => 'MonitorId',
        'monitorName'    => 'MonitorName',
        'outputTemplate' => 'OutputTemplate',
        'ownerId'        => 'OwnerId',
        'stream'         => 'Stream',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->inputList) {
            $res['InputList'] = $this->inputList;
        }
        if (null !== $this->monitorId) {
            $res['MonitorId'] = $this->monitorId;
        }
        if (null !== $this->monitorName) {
            $res['MonitorName'] = $this->monitorName;
        }
        if (null !== $this->outputTemplate) {
            $res['OutputTemplate'] = $this->outputTemplate;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveStreamMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InputList'])) {
            $model->inputList = $map['InputList'];
        }
        if (isset($map['MonitorId'])) {
            $model->monitorId = $map['MonitorId'];
        }
        if (isset($map['MonitorName'])) {
            $model->monitorName = $map['MonitorName'];
        }
        if (isset($map['OutputTemplate'])) {
            $model->outputTemplate = $map['OutputTemplate'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
