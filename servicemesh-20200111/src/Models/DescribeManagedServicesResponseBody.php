<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeManagedServicesResponseBody\managedServiceInfo;
use AlibabaCloud\Tea\Model;

class DescribeManagedServicesResponseBody extends Model
{
    /**
     * @var managedServiceInfo[]
     */
    public $managedServiceInfo;

    /**
     * @var string
     */
    public $mark;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'managedServiceInfo' => 'ManagedServiceInfo',
        'mark'               => 'Mark',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedServiceInfo) {
            $res['ManagedServiceInfo'] = [];
            if (null !== $this->managedServiceInfo && \is_array($this->managedServiceInfo)) {
                $n = 0;
                foreach ($this->managedServiceInfo as $item) {
                    $res['ManagedServiceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeManagedServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagedServiceInfo'])) {
            if (!empty($map['ManagedServiceInfo'])) {
                $model->managedServiceInfo = [];
                $n                         = 0;
                foreach ($map['ManagedServiceInfo'] as $item) {
                    $model->managedServiceInfo[$n++] = null !== $item ? managedServiceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
