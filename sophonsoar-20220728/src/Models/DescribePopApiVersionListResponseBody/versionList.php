<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiVersionListResponseBody;

use AlibabaCloud\Tea\Model;

class versionList extends Model
{
    /**
     * @description The name of the API operation.
     *
     * @example DescribePopApiVersionList
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The POP code of the Alibaba Cloud service.
     *
     * @example Sas
     *
     * @var string
     */
    public $popCode;

    /**
     * @description The version number of the API for the Alibaba Cloud service.
     *
     * @example 2018-12-03
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'apiName' => 'ApiName',
        'popCode' => 'PopCode',
        'version' => 'Version',
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
        if (null !== $this->popCode) {
            $res['PopCode'] = $this->popCode;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['PopCode'])) {
            $model->popCode = $map['PopCode'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
