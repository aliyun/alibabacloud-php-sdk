<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDomainItemsResponseBody\domainItems;

class ListDomainItemsResponseBody extends Model
{
    /**
     * @var domainItems[]
     */
    public $domainItems;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'domainItems' => 'DomainItems',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->domainItems)) {
            Model::validateArray($this->domainItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainItems) {
            if (\is_array($this->domainItems)) {
                $res['DomainItems'] = [];
                $n1 = 0;
                foreach ($this->domainItems as $item1) {
                    $res['DomainItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['DomainItems'])) {
            if (!empty($map['DomainItems'])) {
                $model->domainItems = [];
                $n1 = 0;
                foreach ($map['DomainItems'] as $item1) {
                    $model->domainItems[$n1] = domainItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
