<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeResponseBody\networkPackageOrderModel;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeResponseBody\nodeInfos;
use AlibabaCloud\Tea\Model;

class CreateCloudPhoneNodeResponseBody extends Model
{
    /**
     * @var networkPackageOrderModel
     */
    public $networkPackageOrderModel;

    /**
     * @description The cloud phone matrixes.
     *
     * @var nodeInfos[]
     */
    public $nodeInfos;

    /**
     * @description The order ID.
     *
     * @example 223684716098****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The request ID.
     *
     * @example 69BCBBE4-FCF2-59B8-AD9D-531EB422****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkPackageOrderModel' => 'NetworkPackageOrderModel',
        'nodeInfos' => 'NodeInfos',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkPackageOrderModel) {
            $res['NetworkPackageOrderModel'] = null !== $this->networkPackageOrderModel ? $this->networkPackageOrderModel->toMap() : null;
        }
        if (null !== $this->nodeInfos) {
            $res['NodeInfos'] = [];
            if (null !== $this->nodeInfos && \is_array($this->nodeInfos)) {
                $n = 0;
                foreach ($this->nodeInfos as $item) {
                    $res['NodeInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudPhoneNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkPackageOrderModel'])) {
            $model->networkPackageOrderModel = networkPackageOrderModel::fromMap($map['NetworkPackageOrderModel']);
        }
        if (isset($map['NodeInfos'])) {
            if (!empty($map['NodeInfos'])) {
                $model->nodeInfos = [];
                $n = 0;
                foreach ($map['NodeInfos'] as $item) {
                    $model->nodeInfos[$n++] = null !== $item ? nodeInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
