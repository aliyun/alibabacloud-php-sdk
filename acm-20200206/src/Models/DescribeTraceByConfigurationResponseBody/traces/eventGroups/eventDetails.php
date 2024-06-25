<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\DescribeTraceByConfigurationResponseBody\traces\eventGroups;

use AlibabaCloud\Tea\Model;

class eventDetails extends Model
{
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
    public $ext;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $handleIp;

    /**
     * @var string
     */
    public $logDate;

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
    public $ts;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dataId'     => 'DataId',
        'delay'      => 'Delay',
        'event'      => 'Event',
        'ext'        => 'Ext',
        'group'      => 'Group',
        'handleIp'   => 'HandleIp',
        'logDate'    => 'LogDate',
        'requestIp'  => 'RequestIp',
        'responseIp' => 'ResponseIp',
        'ts'         => 'Ts',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->handleIp) {
            $res['HandleIp'] = $this->handleIp;
        }
        if (null !== $this->logDate) {
            $res['LogDate'] = $this->logDate;
        }
        if (null !== $this->requestIp) {
            $res['RequestIp'] = $this->requestIp;
        }
        if (null !== $this->responseIp) {
            $res['ResponseIp'] = $this->responseIp;
        }
        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['HandleIp'])) {
            $model->handleIp = $map['HandleIp'];
        }
        if (isset($map['LogDate'])) {
            $model->logDate = $map['LogDate'];
        }
        if (isset($map['RequestIp'])) {
            $model->requestIp = $map['RequestIp'];
        }
        if (isset($map['ResponseIp'])) {
            $model->responseIp = $map['ResponseIp'];
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
