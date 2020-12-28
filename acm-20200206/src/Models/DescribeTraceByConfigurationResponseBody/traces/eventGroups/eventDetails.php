<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\DescribeTraceByConfigurationResponseBody\traces\eventGroups;

use AlibabaCloud\Tea\Model;

class eventDetails extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $delay;

    /**
     * @var string
     */
    public $ts;

    /**
     * @var string
     */
    public $responseIp;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $ext;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $requestIp;

    /**
     * @var string
     */
    public $logDate;

    /**
     * @var string
     */
    public $handleIp;

    /**
     * @var string
     */
    public $group;
    protected $_name = [
        'type'       => 'Type',
        'delay'      => 'Delay',
        'ts'         => 'Ts',
        'responseIp' => 'ResponseIp',
        'event'      => 'Event',
        'ext'        => 'Ext',
        'dataId'     => 'DataId',
        'requestIp'  => 'RequestIp',
        'logDate'    => 'LogDate',
        'handleIp'   => 'HandleIp',
        'group'      => 'Group',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
        }
        if (null !== $this->responseIp) {
            $res['ResponseIp'] = $this->responseIp;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->requestIp) {
            $res['RequestIp'] = $this->requestIp;
        }
        if (null !== $this->logDate) {
            $res['LogDate'] = $this->logDate;
        }
        if (null !== $this->handleIp) {
            $res['HandleIp'] = $this->handleIp;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }
        if (isset($map['ResponseIp'])) {
            $model->responseIp = $map['ResponseIp'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['RequestIp'])) {
            $model->requestIp = $map['RequestIp'];
        }
        if (isset($map['LogDate'])) {
            $model->logDate = $map['LogDate'];
        }
        if (isset($map['HandleIp'])) {
            $model->handleIp = $map['HandleIp'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        return $model;
    }
}
