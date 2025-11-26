<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeIpsPrivateAssocResponseBody\ipsPrivateAssoc;

class DescribeIpsPrivateAssocResponseBody extends Model
{
    /**
     * @var ipsPrivateAssoc[]
     */
    public $ipsPrivateAssoc;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalOpenCount;
    protected $_name = [
        'ipsPrivateAssoc' => 'IpsPrivateAssoc',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'totalOpenCount' => 'TotalOpenCount',
    ];

    public function validate()
    {
        if (\is_array($this->ipsPrivateAssoc)) {
            Model::validateArray($this->ipsPrivateAssoc);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipsPrivateAssoc) {
            if (\is_array($this->ipsPrivateAssoc)) {
                $res['IpsPrivateAssoc'] = [];
                $n1 = 0;
                foreach ($this->ipsPrivateAssoc as $item1) {
                    $res['IpsPrivateAssoc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalOpenCount) {
            $res['TotalOpenCount'] = $this->totalOpenCount;
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
        if (isset($map['IpsPrivateAssoc'])) {
            if (!empty($map['IpsPrivateAssoc'])) {
                $model->ipsPrivateAssoc = [];
                $n1 = 0;
                foreach ($map['IpsPrivateAssoc'] as $item1) {
                    $model->ipsPrivateAssoc[$n1] = ipsPrivateAssoc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalOpenCount'])) {
            $model->totalOpenCount = $map['TotalOpenCount'];
        }

        return $model;
    }
}
