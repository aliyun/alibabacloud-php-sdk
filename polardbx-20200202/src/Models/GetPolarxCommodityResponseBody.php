<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\GetPolarxCommodityResponseBody\componentList;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\GetPolarxCommodityResponseBody\DBInstance;
use AlibabaCloud\Tea\Model;

class GetPolarxCommodityResponseBody extends Model
{
    /**
     * @var componentList[]
     */
    public $componentList;

    /**
     * @var DBInstance
     */
    public $DBInstance;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'componentList' => 'ComponentList',
        'DBInstance'    => 'DBInstance',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentList) {
            $res['ComponentList'] = [];
            if (null !== $this->componentList && \is_array($this->componentList)) {
                $n = 0;
                foreach ($this->componentList as $item) {
                    $res['ComponentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBInstance) {
            $res['DBInstance'] = null !== $this->DBInstance ? $this->DBInstance->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolarxCommodityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentList'])) {
            if (!empty($map['ComponentList'])) {
                $model->componentList = [];
                $n                    = 0;
                foreach ($map['ComponentList'] as $item) {
                    $model->componentList[$n++] = null !== $item ? componentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBInstance'])) {
            $model->DBInstance = DBInstance::fromMap($map['DBInstance']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
