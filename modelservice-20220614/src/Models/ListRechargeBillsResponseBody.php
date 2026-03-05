<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelService\V20220614\Models\ListRechargeBillsResponseBody\instanseInfos;

class ListRechargeBillsResponseBody extends Model
{
    /**
     * @var instanseInfos[]
     */
    public $instanseInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $residueAmount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanseInfos' => 'InstanseInfos',
        'requestId' => 'RequestId',
        'residueAmount' => 'ResidueAmount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->instanseInfos)) {
            Model::validateArray($this->instanseInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanseInfos) {
            if (\is_array($this->instanseInfos)) {
                $res['InstanseInfos'] = [];
                $n1 = 0;
                foreach ($this->instanseInfos as $item1) {
                    $res['InstanseInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->residueAmount) {
            $res['ResidueAmount'] = $this->residueAmount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['InstanseInfos'])) {
            if (!empty($map['InstanseInfos'])) {
                $model->instanseInfos = [];
                $n1 = 0;
                foreach ($map['InstanseInfos'] as $item1) {
                    $model->instanseInfos[$n1] = instanseInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResidueAmount'])) {
            $model->residueAmount = $map['ResidueAmount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
