<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListConfigTrackResponseBody;

use AlibabaCloud\Dara\Model;

class traces extends Model
{
    /**
     * @var bool
     */
    public $client;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $delay;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $logDate;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var bool
     */
    public $push;

    /**
     * @var string
     */
    public $requestIp;

    /**
     * @var string
     */
    public $responseIp;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $ts;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'client' => 'Client',
        'dataId' => 'DataId',
        'delay' => 'Delay',
        'event' => 'Event',
        'group' => 'Group',
        'logDate' => 'LogDate',
        'md5' => 'Md5',
        'push' => 'Push',
        'requestIp' => 'RequestIp',
        'responseIp' => 'ResponseIp',
        'result' => 'Result',
        'ts' => 'Ts',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->client) {
            $res['Client'] = $this->client;
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->logDate) {
            $res['LogDate'] = $this->logDate;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->push) {
            $res['Push'] = $this->push;
        }

        if (null !== $this->requestIp) {
            $res['RequestIp'] = $this->requestIp;
        }

        if (null !== $this->responseIp) {
            $res['ResponseIp'] = $this->responseIp;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Client'])) {
            $model->client = $map['Client'];
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        if (isset($map['LogDate'])) {
            $model->logDate = $map['LogDate'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['Push'])) {
            $model->push = $map['Push'];
        }

        if (isset($map['RequestIp'])) {
            $model->requestIp = $map['RequestIp'];
        }

        if (isset($map['ResponseIp'])) {
            $model->responseIp = $map['ResponseIp'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
