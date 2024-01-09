<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class DescribeSitePairResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 1637293095
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example si-0001jntih0phb0i2w1ya
     *
     * @var string
     */
    public $primarySiteId;

    /**
     * @var string
     */
    public $primarySiteName;

    /**
     * @example 700F1972-16A2-5639-A937-D2A6D61557B8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example si-0007rvzart0a2wpup82m
     *
     * @var string
     */
    public $secondarySiteId;

    /**
     * @var string
     */
    public $secondarySiteName;

    /**
     * @example s-000j6lhiuvdqakqa6k7l
     *
     * @var string
     */
    public $sitePairId;

    /**
     * @example cloud2cloud
     *
     * @var string
     */
    public $sitePairType;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example 3.7.3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'code'              => 'Code',
        'createdTime'       => 'CreatedTime',
        'message'           => 'Message',
        'primarySiteId'     => 'PrimarySiteId',
        'primarySiteName'   => 'PrimarySiteName',
        'requestId'         => 'RequestId',
        'secondarySiteId'   => 'SecondarySiteId',
        'secondarySiteName' => 'SecondarySiteName',
        'sitePairId'        => 'SitePairId',
        'sitePairType'      => 'SitePairType',
        'success'           => 'Success',
        'version'           => 'Version',
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
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->primarySiteId) {
            $res['PrimarySiteId'] = $this->primarySiteId;
        }
        if (null !== $this->primarySiteName) {
            $res['PrimarySiteName'] = $this->primarySiteName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secondarySiteId) {
            $res['SecondarySiteId'] = $this->secondarySiteId;
        }
        if (null !== $this->secondarySiteName) {
            $res['SecondarySiteName'] = $this->secondarySiteName;
        }
        if (null !== $this->sitePairId) {
            $res['SitePairId'] = $this->sitePairId;
        }
        if (null !== $this->sitePairType) {
            $res['SitePairType'] = $this->sitePairType;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSitePairResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PrimarySiteId'])) {
            $model->primarySiteId = $map['PrimarySiteId'];
        }
        if (isset($map['PrimarySiteName'])) {
            $model->primarySiteName = $map['PrimarySiteName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecondarySiteId'])) {
            $model->secondarySiteId = $map['SecondarySiteId'];
        }
        if (isset($map['SecondarySiteName'])) {
            $model->secondarySiteName = $map['SecondarySiteName'];
        }
        if (isset($map['SitePairId'])) {
            $model->sitePairId = $map['SitePairId'];
        }
        if (isset($map['SitePairType'])) {
            $model->sitePairType = $map['SitePairType'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
