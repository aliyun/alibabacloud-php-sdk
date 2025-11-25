<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\daInstance;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListMultiUserInstancesResponseBody\saleInstanceList;

class ListMultiUserInstancesResponseBody extends Model
{
    /**
     * @var daInstance
     */
    public $daInstance;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var saleInstanceList[]
     */
    public $saleInstanceList;
    protected $_name = [
        'daInstance' => 'DaInstance',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
        'saleInstanceList' => 'SaleInstanceList',
    ];

    public function validate()
    {
        if (null !== $this->daInstance) {
            $this->daInstance->validate();
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->saleInstanceList)) {
            Model::validateArray($this->saleInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->daInstance) {
            $res['DaInstance'] = null !== $this->daInstance ? $this->daInstance->toArray($noStream) : $this->daInstance;
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->saleInstanceList) {
            if (\is_array($this->saleInstanceList)) {
                $res['SaleInstanceList'] = [];
                $n1 = 0;
                foreach ($this->saleInstanceList as $item1) {
                    $res['SaleInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DaInstance'])) {
            $model->daInstance = daInstance::fromMap($map['DaInstance']);
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SaleInstanceList'])) {
            if (!empty($map['SaleInstanceList'])) {
                $model->saleInstanceList = [];
                $n1 = 0;
                foreach ($map['SaleInstanceList'] as $item1) {
                    $model->saleInstanceList[$n1] = saleInstanceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
