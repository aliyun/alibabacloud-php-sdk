<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The API.
     *
     * @example /api/login
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The IP address.
     *
     * @example 10.50.11.**
     *
     * @var string
     */
    public $clientIP;

    /**
     * @description The number of entries returned.
     *
     * @example 169
     *
     * @var int
     */
    public $count;

    /**
     * @description The domain name.
     *
     * @example a.****.com
     *
     * @var string
     */
    public $matchedHost;

    /**
     * @description The type of the sensitive data.
     *
     * >  You can call the [DescribeApisecRules](~~DescribeApisecRules~~) operation to query the supported types of sensitive data.
     * @example 1003
     *
     * @var string
     */
    public $sensitiveCode;
    protected $_name = [
        'apiFormat'     => 'ApiFormat',
        'clientIP'      => 'ClientIP',
        'count'         => 'Count',
        'matchedHost'   => 'MatchedHost',
        'sensitiveCode' => 'SensitiveCode',
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
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }
        if (null !== $this->sensitiveCode) {
            $res['SensitiveCode'] = $this->sensitiveCode;
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
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }
        if (isset($map['SensitiveCode'])) {
            $model->sensitiveCode = $map['SensitiveCode'];
        }

        return $model;
    }
}
