<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTenantConfigResponseBody\tenantConfigModel;
use AlibabaCloud\Tea\Model;

class ListTenantConfigResponseBody extends Model
{
    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tenantConfigModel
     */
    public $tenantConfigModel;
    protected $_name = [
        'requestId'         => 'RequestId',
        'tenantConfigModel' => 'TenantConfigModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tenantConfigModel) {
            $res['TenantConfigModel'] = null !== $this->tenantConfigModel ? $this->tenantConfigModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTenantConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TenantConfigModel'])) {
            $model->tenantConfigModel = tenantConfigModel::fromMap($map['TenantConfigModel']);
        }

        return $model;
    }
}
