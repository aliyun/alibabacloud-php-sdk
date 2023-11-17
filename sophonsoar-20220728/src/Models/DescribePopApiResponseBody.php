<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiResponseBody\openApiMetaList;
use AlibabaCloud\Tea\Model;

class DescribePopApiResponseBody extends Model
{
    /**
     * @example AddAssetCleanConfig
     *
     * @var string
     */
    public $apiName;

    /**
     * @var openApiMetaList[]
     */
    public $openApiMetaList;

    /**
     * @example Sas
     *
     * @var string
     */
    public $popCode;

    /**
     * @example 1A01B0BA-CFC4-5813-9EB0-A5DA15FA95AE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2019-09-10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'apiName'         => 'ApiName',
        'openApiMetaList' => 'OpenApiMetaList',
        'popCode'         => 'PopCode',
        'requestId'       => 'RequestId',
        'version'         => 'Version',
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
        if (null !== $this->openApiMetaList) {
            $res['OpenApiMetaList'] = [];
            if (null !== $this->openApiMetaList && \is_array($this->openApiMetaList)) {
                $n = 0;
                foreach ($this->openApiMetaList as $item) {
                    $res['OpenApiMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->popCode) {
            $res['PopCode'] = $this->popCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePopApiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['OpenApiMetaList'])) {
            if (!empty($map['OpenApiMetaList'])) {
                $model->openApiMetaList = [];
                $n                      = 0;
                foreach ($map['OpenApiMetaList'] as $item) {
                    $model->openApiMetaList[$n++] = null !== $item ? openApiMetaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PopCode'])) {
            $model->popCode = $map['PopCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
