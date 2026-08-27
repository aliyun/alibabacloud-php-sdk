<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListGatewayErrorAccessLogsRequest extends Model
{
    /**
     * @var string
     */
    public $authority;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $gatewayRequestId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $responseCode;

    /**
     * @var string
     */
    public $routeName;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'authority' => 'authority',
        'endTime' => 'endTime',
        'gatewayRequestId' => 'gatewayRequestId',
        'path' => 'path',
        'responseCode' => 'responseCode',
        'routeName' => 'routeName',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authority) {
            $res['authority'] = $this->authority;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->gatewayRequestId) {
            $res['gatewayRequestId'] = $this->gatewayRequestId;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->responseCode) {
            $res['responseCode'] = $this->responseCode;
        }

        if (null !== $this->routeName) {
            $res['routeName'] = $this->routeName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['authority'])) {
            $model->authority = $map['authority'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['gatewayRequestId'])) {
            $model->gatewayRequestId = $map['gatewayRequestId'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['responseCode'])) {
            $model->responseCode = $map['responseCode'];
        }

        if (isset($map['routeName'])) {
            $model->routeName = $map['routeName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
