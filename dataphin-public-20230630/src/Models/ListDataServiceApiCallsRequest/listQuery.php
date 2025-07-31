<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallsRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @example 20122
     *
     * @var int
     */
    public $apiId;

    /**
     * @example test
     *
     * @var string
     */
    public $apiName;

    /**
     * @description appKey
     *
     * @example 1021
     *
     * @var int
     */
    public $appKey;

    /**
     * @example 192.168.1.1
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description This parameter is required.
     *
     * @example 2025-06-30 20:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example 2025-06-30 08:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @var bool
     */
    public $successful;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'appKey' => 'AppKey',
        'clientIp' => 'ClientIp',
        'endTime' => 'EndTime',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'successful' => 'Successful',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->successful) {
            $res['Successful'] = $this->successful;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Successful'])) {
            $model->successful = $map['Successful'];
        }

        return $model;
    }
}
