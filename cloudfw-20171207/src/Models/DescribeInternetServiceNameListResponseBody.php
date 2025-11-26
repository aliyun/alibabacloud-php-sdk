<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeInternetServiceNameListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $serviceNameList;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceNameList' => 'ServiceNameList',
    ];

    public function validate()
    {
        if (\is_array($this->serviceNameList)) {
            Model::validateArray($this->serviceNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceNameList) {
            if (\is_array($this->serviceNameList)) {
                $res['ServiceNameList'] = [];
                $n1 = 0;
                foreach ($this->serviceNameList as $item1) {
                    $res['ServiceNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceNameList'])) {
            if (!empty($map['ServiceNameList'])) {
                $model->serviceNameList = [];
                $n1 = 0;
                foreach ($map['ServiceNameList'] as $item1) {
                    $model->serviceNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
