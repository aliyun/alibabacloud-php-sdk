<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountRequest\tenantContext;

class GetReportUnReadCountRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $request;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'request' => 'Request',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->request)) {
            Model::validateArray($this->request);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->request) {
            if (\is_array($this->request)) {
                $res['Request'] = [];
                foreach ($this->request as $key1 => $value1) {
                    $res['Request'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
        if (isset($map['Request'])) {
            if (!empty($map['Request'])) {
                $model->request = [];
                foreach ($map['Request'] as $key1 => $value1) {
                    $model->request[$key1] = $value1;
                }
            }
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
