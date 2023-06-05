<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListResourceGroupsResponseBody extends Model
{
    /**
     * @description The time when the resource group was last updated.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The resource groups.
     *
     * @example 0bc1411515937635973****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the resource group. Valid values:
     *
     *   0: The resource group is running or in service.
     *   1: The resource group has expired and is frozen.
     *   2: The resource group is released or destroyed.
     *   3: The resource group is being created or started.
     *   4: The resource group fails to be created or started.
     *   5: The resource group is being scaled out or upgraded.
     *   6: The resource group fails to be scaled out or upgraded.
     *   7: The resource group is being released or destroyed.
     *   8: The resource group fails to be released or destroyed.
     *   9: The operation performed on the resource group times out. All operations may time out. This value is temporarily available only for DataService Studio.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
