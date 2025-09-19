<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIdcProbeListResponseBody\idcProbes;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIdcProbeListResponseBody\pageInfo;

class DescribeIdcProbeListResponseBody extends Model
{
    /**
     * @var idcProbes[]
     */
    public $idcProbes;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'idcProbes' => 'IdcProbes',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->idcProbes)) {
            Model::validateArray($this->idcProbes);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idcProbes) {
            if (\is_array($this->idcProbes)) {
                $res['IdcProbes'] = [];
                $n1 = 0;
                foreach ($this->idcProbes as $item1) {
                    $res['IdcProbes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['IdcProbes'])) {
            if (!empty($map['IdcProbes'])) {
                $model->idcProbes = [];
                $n1 = 0;
                foreach ($map['IdcProbes'] as $item1) {
                    $model->idcProbes[$n1] = idcProbes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
