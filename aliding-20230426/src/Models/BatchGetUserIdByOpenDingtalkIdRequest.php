<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetUserIdByOpenDingtalkIdRequest\tenantContext;

class BatchGetUserIdByOpenDingtalkIdRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string[]
     */
    public $openDingtalkIds;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'openDingtalkIds' => 'openDingtalkIds',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->openDingtalkIds)) {
            Model::validateArray($this->openDingtalkIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->openDingtalkIds) {
            if (\is_array($this->openDingtalkIds)) {
                $res['openDingtalkIds'] = [];
                $n1 = 0;
                foreach ($this->openDingtalkIds as $item1) {
                    $res['openDingtalkIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['openDingtalkIds'])) {
            if (!empty($map['openDingtalkIds'])) {
                $model->openDingtalkIds = [];
                $n1 = 0;
                foreach ($map['openDingtalkIds'] as $item1) {
                    $model->openDingtalkIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
