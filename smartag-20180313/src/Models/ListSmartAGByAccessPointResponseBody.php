<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\ListSmartAGByAccessPointResponseBody\smartAccessGateways;
use AlibabaCloud\Tea\Model;

class ListSmartAGByAccessPointResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var smartAccessGateways[]
     */
    public $smartAccessGateways;
    protected $_name = [
        'totalCount'          => 'TotalCount',
        'requestId'           => 'RequestId',
        'smartAccessGateways' => 'SmartAccessGateways',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->smartAccessGateways) {
            $res['SmartAccessGateways'] = [];
            if (null !== $this->smartAccessGateways && \is_array($this->smartAccessGateways)) {
                $n = 0;
                foreach ($this->smartAccessGateways as $item) {
                    $res['SmartAccessGateways'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSmartAGByAccessPointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SmartAccessGateways'])) {
            if (!empty($map['SmartAccessGateways'])) {
                $model->smartAccessGateways = [];
                $n                          = 0;
                foreach ($map['SmartAccessGateways'] as $item) {
                    $model->smartAccessGateways[$n++] = null !== $item ? smartAccessGateways::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
