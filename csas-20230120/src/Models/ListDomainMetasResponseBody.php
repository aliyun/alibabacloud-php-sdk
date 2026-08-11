<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDomainMetasResponseBody\domainMetas;

class ListDomainMetasResponseBody extends Model
{
    /**
     * @var domainMetas[]
     */
    public $domainMetas;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'domainMetas' => 'DomainMetas',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->domainMetas)) {
            Model::validateArray($this->domainMetas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainMetas) {
            if (\is_array($this->domainMetas)) {
                $res['DomainMetas'] = [];
                $n1 = 0;
                foreach ($this->domainMetas as $item1) {
                    $res['DomainMetas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainMetas'])) {
            if (!empty($map['DomainMetas'])) {
                $model->domainMetas = [];
                $n1 = 0;
                foreach ($map['DomainMetas'] as $item1) {
                    $model->domainMetas[$n1] = domainMetas::fromMap($item1);
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
