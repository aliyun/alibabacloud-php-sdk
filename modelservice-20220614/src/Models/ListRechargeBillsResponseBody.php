<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models;

use AlibabaCloud\SDK\ModelService\V20220614\Models\ListRechargeBillsResponseBody\instanseInfos;
use AlibabaCloud\Tea\Model;

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
        'requestId'     => 'RequestId',
        'residueAmount' => 'ResidueAmount',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanseInfos) {
            $res['InstanseInfos'] = [];
            if (null !== $this->instanseInfos && \is_array($this->instanseInfos)) {
                $n = 0;
                foreach ($this->instanseInfos as $item) {
                    $res['InstanseInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListRechargeBillsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanseInfos'])) {
            if (!empty($map['InstanseInfos'])) {
                $model->instanseInfos = [];
                $n                    = 0;
                foreach ($map['InstanseInfos'] as $item) {
                    $model->instanseInfos[$n++] = null !== $item ? instanseInfos::fromMap($item) : $item;
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
