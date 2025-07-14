<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDataServiceRequest extends Model
{
    /**
     * @description The API ID in the data service. For more information, see [Data Service](https://help.aliyun.com/document_detail/144980.html).
     *
     * This parameter is required.
     *
     * @example f4cc43bc3***
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The query conditions for the data service, passed in as Key-Value pairs. This is a map-type string. Here, Key is the name of the request parameter, and Value is the value of the request parameter. Keys and Values must appear in pairs.
     *
     **Note:**
     *
     * - When the operator of the request parameter is set to **enumeration filter**, the value can contain multiple values. In this case, the format of the value is a JSON list. For example: `area=["East China","North China","South China"]`
     *
     * - For dates, different formats are provided based on the type:
     *
     * - Year: 2019
     *
     * - Quarter: 2019Q1
     *
     * - Month: 201901 (with leading zero)
     *
     * - Week: 2019-52
     *
     * - Day: 20190101
     *
     * - Hour: 14:00:00 (minutes and seconds are 00)
     *
     * - Minute: 14:12:00 (seconds are 00)
     *
     * - Second: 14:34:34
     *
     * @example { "area": ["华东", "华北"],  "shopping_date": "2019Q1",  }
     *
     * @var string
     */
    public $conditions;

    /**
     * @description A list of parameter names to be returned, as a List-type string.
     *
     * @example ["area", "city", "price", "date"]
     *
     * @var string
     */
    public $returnFields;
    protected $_name = [
        'apiId' => 'ApiId',
        'conditions' => 'Conditions',
        'returnFields' => 'ReturnFields',
    ];

    public function validate() {}

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
