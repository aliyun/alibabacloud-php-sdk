<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestLogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The API.
     *
     * @example /api/users/login
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The ID of the API.
     *
     * @example 197b52abcd81d6a8bd4***e477
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The IP address.
     *
     * @example 103.118.55.**
     *
     * @var string
     */
    public $clientIP;

    /**
     * @description The number of sensitive data records involved in cross-border data transfer.
     *
     * @example 12
     *
     * @var int
     */
    public $count;

    /**
     * @description The domain name of the API.
     *
     * @example a.****.com
     *
     * @var string
     */
    public $matchedHost;

    /**
     * @description IP region, formatted as a region code.
     *
     * @example CN
     *
     * @var string
     */
    public $remoteCountryId;

    /**
     * @description The time when the request was initiated. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1723392000
     *
     * @var int
     */
    public $requestTime;

    /**
     * @description The sensitive data.
     *
     * @example A0Y5MPH3P
     *
     * @var string
     */
    public $sensitiveList;

    /**
     * @description The trace ID.
     *
     * @example 0a3d455b17027784870843933dce3d
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'apiFormat'       => 'ApiFormat',
        'apiId'           => 'ApiId',
        'clientIP'        => 'ClientIP',
        'count'           => 'Count',
        'matchedHost'     => 'MatchedHost',
        'remoteCountryId' => 'RemoteCountryId',
        'requestTime'     => 'RequestTime',
        'sensitiveList'   => 'SensitiveList',
        'traceId'         => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }
        if (null !== $this->remoteCountryId) {
            $res['RemoteCountryId'] = $this->remoteCountryId;
        }
        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }
        if (null !== $this->sensitiveList) {
            $res['SensitiveList'] = $this->sensitiveList;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }
        if (isset($map['RemoteCountryId'])) {
            $model->remoteCountryId = $map['RemoteCountryId'];
        }
        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }
        if (isset($map['SensitiveList'])) {
            $model->sensitiveList = $map['SensitiveList'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
