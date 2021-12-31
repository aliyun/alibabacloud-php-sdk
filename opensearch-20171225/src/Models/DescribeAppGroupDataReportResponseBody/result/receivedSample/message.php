<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponseBody\result\receivedSample;

use AlibabaCloud\Tea\Model;

class message extends Model
{
    /**
     * @var string
     */
    public $arg1;

    /**
     * @var string
     */
    public $arg3;

    /**
     * @var string
     */
    public $args;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $eventId;

    /**
     * @var string
     */
    public $page;

    /**
     * @var string
     */
    public $sdkType;

    /**
     * @var string
     */
    public $sdkVersion;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'arg1'       => 'arg1',
        'arg3'       => 'arg3',
        'args'       => 'args',
        'clientIp'   => 'clientIp',
        'eventId'    => 'eventId',
        'page'       => 'page',
        'sdkType'    => 'sdkType',
        'sdkVersion' => 'sdkVersion',
        'sessionId'  => 'sessionId',
        'userId'     => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arg1) {
            $res['arg1'] = $this->arg1;
        }
        if (null !== $this->arg3) {
            $res['arg3'] = $this->arg3;
        }
        if (null !== $this->args) {
            $res['args'] = $this->args;
        }
        if (null !== $this->clientIp) {
            $res['clientIp'] = $this->clientIp;
        }
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->sdkType) {
            $res['sdkType'] = $this->sdkType;
        }
        if (null !== $this->sdkVersion) {
            $res['sdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return message
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arg1'])) {
            $model->arg1 = $map['arg1'];
        }
        if (isset($map['arg3'])) {
            $model->arg3 = $map['arg3'];
        }
        if (isset($map['args'])) {
            $model->args = $map['args'];
        }
        if (isset($map['clientIp'])) {
            $model->clientIp = $map['clientIp'];
        }
        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['sdkType'])) {
            $model->sdkType = $map['sdkType'];
        }
        if (isset($map['sdkVersion'])) {
            $model->sdkVersion = $map['sdkVersion'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
