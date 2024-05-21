<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDataServiceRequest extends Model
{
    /**
     * @description Call an API that is created in DataService Studio.
     *
     * This parameter is required.
     * @example f4cc43bc3***
     *
     * @var string
     */
    public $apiId;

    /**
     * @description # Prerequisites
     *
     * # Limits
     *
     *   The Data Service feature is available only to Professional customers.
     *   The timeout period for API calls is 60s. The QPS of a single API is 10 times per second.
     *   If row-level permissions are enabled for datasets that are referenced by a Data Service API, the API may be blocked by row-level permission policies.
     *
     * @example For more information about API IDs in DataService, see [Data Service](https://help.aliyun.com/document_detail/144980.html).
     *
     * @var string
     */
    public $conditions;

    /**
     * @description The query conditions of the data service. The query conditions are specified in the form of keys and values. A string of the map type. Key is the name of the request parameters parameter, and Value is the value of the request parameters parameter. Key and Value must appear in pairs.
     *
     **Note:**
     *
     *   If a value contains multiple values, the value is a List in the JSON format. Example: `area=["East China","North China","South China"]`
     *
     *   For dates, different input parameter formats are provided based on different types:
     *
     *   Year: 2019
     *   Season: 2019Q1
     *   Month: 201901 (carry 0)
     *   Week: 2019-52
     *   Day: 20190101
     *   Hours: 14:00:00 (minutes and seconds are 00)
     *   Minutes: 14:12:00 (seconds are 00)
     *   Seconds: 14:34:34
     *
     * @example ["area", "city", "price", "date"]
     *
     * @var string
     */
    public $returnFields;
    protected $_name = [
        'apiId'        => 'ApiId',
        'conditions'   => 'Conditions',
        'returnFields' => 'ReturnFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->conditions) {
            $res['Conditions'] = $this->conditions;
        }
        if (null !== $this->returnFields) {
            $res['ReturnFields'] = $this->returnFields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDataServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['Conditions'])) {
            $model->conditions = $map['Conditions'];
        }
        if (isset($map['ReturnFields'])) {
            $model->returnFields = $map['ReturnFields'];
        }

        return $model;
    }
}
