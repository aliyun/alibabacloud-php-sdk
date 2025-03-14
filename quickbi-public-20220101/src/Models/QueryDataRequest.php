<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDataRequest extends Model
{
    /**
     * @description The API ID in the data service. For more information, see: [Data Service](https://help.aliyun.com/document_detail/144980.html).
     *
     * This parameter is required.
     *
     * @example f4cc43bc3***
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The query conditions for the data service, passed in as Key and Value pairs. A map-type string. Here, Key is the name of the request parameter, and Value is the value of the request parameter. Key and Value must appear in pairs.
     *
     **Note:**
     *
     * - When the operator of the request parameter is set to **enumeration filtering**, the value can contain multiple values, and the format of the value should be a JSON-formatted List. For example: `area=["East China","North China","South China"]`
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
     * @description A list of return parameter names, in a List-type string.
     *
     * @example ["area", "city", "price", "date"]
     *
     * @var string
     */
    public $returnFields;

    /**
     * @description The userId in Quick BI. For how to obtain the userId, see: [Query User Information by Account Interface](https://next.api.aliyun.com/document/quickbi-public/2022-01-01/QueryUserInfoByAccount)
     * > This parameter is used to specify the identity of the person using the data service, which can be used in conjunction with the row and column permission configurations of the dataset.
     * >Notice: If the parameter is not passed, an empty string is passed, or null is passed, the default userId will be the owner of the current Quick BI organization.</notice>
     * @example b5d8fd9348cc4327****afb604
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'apiId' => 'ApiId',
        'conditions' => 'Conditions',
        'returnFields' => 'ReturnFields',
        'userId' => 'UserId',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDataRequest
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
