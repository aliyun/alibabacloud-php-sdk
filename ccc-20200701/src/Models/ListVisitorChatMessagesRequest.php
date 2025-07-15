<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListVisitorChatMessagesRequest extends Model
{
    /**
     * @example cf584733-***-***-9699-cb77aa3b7aa6
     *
     * @var string
     */
    public $accessChannelId;

    /**
     * @example 9XYGTGWtq2wXzVikKuip_zeVGl6O4VJ-l-*-*-JPofhap4P7fAevuE=
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 1650316799000
     *
     * @var string
     */
    public $endTime;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1737193352340::7463707254.EAUNIT
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example DESC
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @example 1647325450000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example fcd020fe-****-1a272a174a7d
     *
     * @var string
     */
    public $visitorId;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'accessToken' => 'AccessToken',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'nextPageToken' => 'NextPageToken',
        'pageSize' => 'PageSize',
        'sortOrder' => 'SortOrder',
        'startTime' => 'StartTime',
        'visitorId' => 'VisitorId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessChannelId) {
            $res['AccessChannelId'] = $this->accessChannelId;
        }
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->visitorId) {
            $res['VisitorId'] = $this->visitorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVisitorChatMessagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessChannelId'])) {
            $model->accessChannelId = $map['AccessChannelId'];
        }
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VisitorId'])) {
            $model->visitorId = $map['VisitorId'];
        }

        return $model;
    }
}
