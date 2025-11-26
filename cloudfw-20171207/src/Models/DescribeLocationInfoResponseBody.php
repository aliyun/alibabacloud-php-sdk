<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeLocationInfoResponseBody\cnList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeLocationInfoResponseBody\cnProvinceList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeLocationInfoResponseBody\overseasList;

class DescribeLocationInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $cnCount;

    /**
     * @var cnList[]
     */
    public $cnList;

    /**
     * @var cnProvinceList[]
     */
    public $cnProvinceList;

    /**
     * @var int
     */
    public $overseasCount;

    /**
     * @var overseasList[]
     */
    public $overseasList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cnCount' => 'CnCount',
        'cnList' => 'CnList',
        'cnProvinceList' => 'CnProvinceList',
        'overseasCount' => 'OverseasCount',
        'overseasList' => 'OverseasList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cnList)) {
            Model::validateArray($this->cnList);
        }
        if (\is_array($this->cnProvinceList)) {
            Model::validateArray($this->cnProvinceList);
        }
        if (\is_array($this->overseasList)) {
            Model::validateArray($this->overseasList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnCount) {
            $res['CnCount'] = $this->cnCount;
        }

        if (null !== $this->cnList) {
            if (\is_array($this->cnList)) {
                $res['CnList'] = [];
                $n1 = 0;
                foreach ($this->cnList as $item1) {
                    $res['CnList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cnProvinceList) {
            if (\is_array($this->cnProvinceList)) {
                $res['CnProvinceList'] = [];
                $n1 = 0;
                foreach ($this->cnProvinceList as $item1) {
                    $res['CnProvinceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->overseasCount) {
            $res['OverseasCount'] = $this->overseasCount;
        }

        if (null !== $this->overseasList) {
            if (\is_array($this->overseasList)) {
                $res['OverseasList'] = [];
                $n1 = 0;
                foreach ($this->overseasList as $item1) {
                    $res['OverseasList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CnCount'])) {
            $model->cnCount = $map['CnCount'];
        }

        if (isset($map['CnList'])) {
            if (!empty($map['CnList'])) {
                $model->cnList = [];
                $n1 = 0;
                foreach ($map['CnList'] as $item1) {
                    $model->cnList[$n1] = cnList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CnProvinceList'])) {
            if (!empty($map['CnProvinceList'])) {
                $model->cnProvinceList = [];
                $n1 = 0;
                foreach ($map['CnProvinceList'] as $item1) {
                    $model->cnProvinceList[$n1] = cnProvinceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OverseasCount'])) {
            $model->overseasCount = $map['OverseasCount'];
        }

        if (isset($map['OverseasList'])) {
            if (!empty($map['OverseasList'])) {
                $model->overseasList = [];
                $n1 = 0;
                foreach ($map['OverseasList'] as $item1) {
                    $model->overseasList[$n1] = overseasList::fromMap($item1);
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
