<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackSourceCidrResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $cidrList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cidrList' => 'CidrList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cidrList)) {
            Model::validateArray($this->cidrList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrList) {
            if (\is_array($this->cidrList)) {
                $res['CidrList'] = [];
                $n1 = 0;
                foreach ($this->cidrList as $item1) {
                    $res['CidrList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CidrList'])) {
            if (!empty($map['CidrList'])) {
                $model->cidrList = [];
                $n1 = 0;
                foreach ($map['CidrList'] as $item1) {
                    $model->cidrList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
