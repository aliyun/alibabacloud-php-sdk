<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails;
use AlibabaCloud\Tea\Model;

class DescribeSummaryResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description -
     *
     * @example -
     *
     * @var int
     */
    public $dbServerCount;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @var replicationDetails
     */
    public $replicationDetails;

    /**
     * @example DE78056B-E82A-52FD-BF5E-F737D8B63845
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var int
     */
    public $serverCount;

    /**
     * @example 4
     *
     * @var int
     */
    public $siteCount;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'code'               => 'Code',
        'dbServerCount'      => 'DbServerCount',
        'message'            => 'Message',
        'replicationDetails' => 'ReplicationDetails',
        'requestId'          => 'RequestId',
        'serverCount'        => 'ServerCount',
        'siteCount'          => 'SiteCount',
        'success'            => 'Success',
        'totalSize'          => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->dbServerCount) {
            $res['DbServerCount'] = $this->dbServerCount;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->replicationDetails) {
            $res['ReplicationDetails'] = null !== $this->replicationDetails ? $this->replicationDetails->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serverCount) {
            $res['ServerCount'] = $this->serverCount;
        }
        if (null !== $this->siteCount) {
            $res['SiteCount'] = $this->siteCount;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DbServerCount'])) {
            $model->dbServerCount = $map['DbServerCount'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ReplicationDetails'])) {
            $model->replicationDetails = replicationDetails::fromMap($map['ReplicationDetails']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerCount'])) {
            $model->serverCount = $map['ServerCount'];
        }
        if (isset($map['SiteCount'])) {
            $model->siteCount = $map['SiteCount'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
