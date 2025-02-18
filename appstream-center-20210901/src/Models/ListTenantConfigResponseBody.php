<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTenantConfigResponseBody\tenantConfigModel;

class ListTenantConfigResponseBody extends Model
{
    /**
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
        if (null !== $this->tenantConfigModel) {
            $this->tenantConfigModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenantConfigModel) {
            $res['TenantConfigModel'] = null !== $this->tenantConfigModel ? $this->tenantConfigModel->toArray($noStream) : $this->tenantConfigModel;
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

        if (isset($map['TenantConfigModel'])) {
            $model->tenantConfigModel = tenantConfigModel::fromMap($map['TenantConfigModel']);
        }

        return $model;
    }
}
