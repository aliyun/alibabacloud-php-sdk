<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListApplicationMonitorDetectResultResponseBody;

use AlibabaCloud\Tea\Model;

class applicationMonitorDetectResultList extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $detectTime;

    /**
     * @var string
     */
    public $diagStatus;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'content'       => 'Content',
        'detail'        => 'Detail',
        'detectTime'    => 'DetectTime',
        'diagStatus'    => 'DiagStatus',
        'listenerId'    => 'ListenerId',
        'port'          => 'Port',
        'protocol'      => 'Protocol',
        'statusCode'    => 'StatusCode',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->detectTime) {
            $res['DetectTime'] = $this->detectTime;
        }
        if (null !== $this->diagStatus) {
            $res['DiagStatus'] = $this->diagStatus;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationMonitorDetectResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DetectTime'])) {
            $model->detectTime = $map['DetectTime'];
        }
        if (isset($map['DiagStatus'])) {
            $model->diagStatus = $map['DiagStatus'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
