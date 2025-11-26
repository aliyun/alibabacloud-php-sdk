<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListAICPublicKeyDeliveriesResponseBody\publicKeyDeliverInfo;

class ListAICPublicKeyDeliveriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var publicKeyDeliverInfo[]
     */
    public $publicKeyDeliverInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'publicKeyDeliverInfo' => 'PublicKeyDeliverInfo',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->publicKeyDeliverInfo)) {
            Model::validateArray($this->publicKeyDeliverInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->publicKeyDeliverInfo) {
            if (\is_array($this->publicKeyDeliverInfo)) {
                $res['PublicKeyDeliverInfo'] = [];
                $n1 = 0;
                foreach ($this->publicKeyDeliverInfo as $item1) {
                    $res['PublicKeyDeliverInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PublicKeyDeliverInfo'])) {
            if (!empty($map['PublicKeyDeliverInfo'])) {
                $model->publicKeyDeliverInfo = [];
                $n1 = 0;
                foreach ($map['PublicKeyDeliverInfo'] as $item1) {
                    $model->publicKeyDeliverInfo[$n1] = publicKeyDeliverInfo::fromMap($item1);
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

        return $model;
    }
}
