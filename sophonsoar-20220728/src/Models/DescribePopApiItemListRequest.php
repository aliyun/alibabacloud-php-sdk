<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribePopApiItemListRequest extends Model
{
    /**
     * @description The API operation name of the Alibaba Cloud service. Fuzzy match is supported.
     *
     * @example DescribePopApiItemList
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The version number of the API.
     *
     * >  You can call the [DescribePopApiVersionList](~~DescribePopApiVersionList~~) operation to query the version number.
     * @example 2018-12-03
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @description The environment in which the API operation parameters are used. Set the value to online.
     *
     * @example online
     *
     * @var string
     */
    public $env;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The POP code of the Alibaba Cloud service.
     *
     * >  You can call the [DescribeApiList](~~DescribeApiList~~) operation to query the POP code.
     * @example Sas
     *
     * @var string
     */
    public $popCode;
    protected $_name = [
        'apiName'    => 'ApiName',
        'apiVersion' => 'ApiVersion',
        'env'        => 'Env',
        'lang'       => 'Lang',
        'popCode'    => 'PopCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->popCode) {
            $res['PopCode'] = $this->popCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePopApiItemListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PopCode'])) {
            $model->popCode = $map['PopCode'];
        }

        return $model;
    }
}
