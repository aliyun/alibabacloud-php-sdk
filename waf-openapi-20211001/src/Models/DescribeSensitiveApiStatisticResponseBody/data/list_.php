<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveApiStatisticResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
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
     * @description The ID of the API.
     *
     * @example d288137009c119a873d4c395****
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The number of personal information records involved in cross-border data transfer by API.
     *
     * @example 78
     *
     * @var int
     */
    public $infoCount;

    /**
     * @description The types of sensitive data.
     *
     * @var string[]
     */
    public $sensitiveCode;

    /**
     * @description The number of sensitive personal information records involved in cross-border data transfer by API.
     *
     * @example 55
     *
     * @var int
     */
    public $sensitiveCount;
    protected $_name = [
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'infoCount' => 'InfoCount',
        'sensitiveCode' => 'SensitiveCode',
        'sensitiveCount' => 'SensitiveCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->infoCount) {
            $res['InfoCount'] = $this->infoCount;
        }
        if (null !== $this->sensitiveCode) {
            $res['SensitiveCode'] = $this->sensitiveCode;
        }
        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
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
        if (isset($map['InfoCount'])) {
            $model->infoCount = $map['InfoCount'];
        }
        if (isset($map['SensitiveCode'])) {
            if (!empty($map['SensitiveCode'])) {
                $model->sensitiveCode = $map['SensitiveCode'];
            }
        }
        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }

        return $model;
    }
}
