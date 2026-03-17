<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ListSmartAGByAccessPointResponseBody\smartAccessGateways;

class ListSmartAGByAccessPointResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var smartAccessGateways[]
     */
    public $smartAccessGateways;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'smartAccessGateways' => 'SmartAccessGateways',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->smartAccessGateways)) {
            Model::validateArray($this->smartAccessGateways);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->smartAccessGateways) {
            if (\is_array($this->smartAccessGateways)) {
                $res['SmartAccessGateways'] = [];
                $n1 = 0;
                foreach ($this->smartAccessGateways as $item1) {
                    $res['SmartAccessGateways'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SmartAccessGateways'])) {
            if (!empty($map['SmartAccessGateways'])) {
                $model->smartAccessGateways = [];
                $n1 = 0;
                foreach ($map['SmartAccessGateways'] as $item1) {
                    $model->smartAccessGateways[$n1] = smartAccessGateways::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
