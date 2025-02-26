<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestLogResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $apiFormat;
    /**
     * @var string
     */
    public $apiId;
    /**
     * @var string
     */
    public $clientIP;
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $matchedHost;
    /**
     * @var string
     */
    public $remoteCountryId;
    /**
     * @var int
     */
    public $requestTime;
    /**
     * @var string
     */
    public $sensitiveList;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
