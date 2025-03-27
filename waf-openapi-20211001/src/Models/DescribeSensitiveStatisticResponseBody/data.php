<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveStatisticResponseBody;

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
    public $sensitiveCode;
    protected $_name = [
        'apiFormat' => 'ApiFormat',
        'clientIP' => 'ClientIP',
        'count' => 'Count',
        'matchedHost' => 'MatchedHost',
        'sensitiveCode' => 'SensitiveCode',
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
