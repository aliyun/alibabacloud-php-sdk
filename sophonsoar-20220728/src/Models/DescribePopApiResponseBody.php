<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiResponseBody\openApiMetaList;

class DescribePopApiResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var openApiMetaList[]
     */
    public $openApiMetaList;

    /**
     * @var string
     */
    public $popCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'apiName' => 'ApiName',
        'openApiMetaList' => 'OpenApiMetaList',
        'popCode' => 'PopCode',
        'requestId' => 'RequestId',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->openApiMetaList)) {
            Model::validateArray($this->openApiMetaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->openApiMetaList) {
            if (\is_array($this->openApiMetaList)) {
                $res['OpenApiMetaList'] = [];
                $n1 = 0;
                foreach ($this->openApiMetaList as $item1) {
                    $res['OpenApiMetaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['OpenApiMetaList'])) {
            if (!empty($map['OpenApiMetaList'])) {
                $model->openApiMetaList = [];
                $n1 = 0;
                foreach ($map['OpenApiMetaList'] as $item1) {
                    $model->openApiMetaList[$n1] = openApiMetaList::fromMap($item1);
                    ++$n1;
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
