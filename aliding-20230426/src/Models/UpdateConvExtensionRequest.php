<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateConvExtensionRequest\tenantContext;

class UpdateConvExtensionRequest extends Model
{
    /**
     * @var string
     */
    public $mobileUrl;

    /**
     * @var string
     */
    public $pcUrl;

    /**
     * @var string[]
     */
    public $staffIdList;

    /**
     * @var string
     */
    public $systemUid;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'mobileUrl' => 'MobileUrl',
        'pcUrl' => 'PcUrl',
        'staffIdList' => 'StaffIdList',
        'systemUid' => 'SystemUid',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (\is_array($this->staffIdList)) {
            Model::validateArray($this->staffIdList);
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mobileUrl) {
            $res['MobileUrl'] = $this->mobileUrl;
        }

        if (null !== $this->pcUrl) {
            $res['PcUrl'] = $this->pcUrl;
        }

        if (null !== $this->staffIdList) {
            if (\is_array($this->staffIdList)) {
                $res['StaffIdList'] = [];
                $n1 = 0;
                foreach ($this->staffIdList as $item1) {
                    $res['StaffIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->systemUid) {
            $res['SystemUid'] = $this->systemUid;
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
        if (isset($map['MobileUrl'])) {
            $model->mobileUrl = $map['MobileUrl'];
        }

        if (isset($map['PcUrl'])) {
            $model->pcUrl = $map['PcUrl'];
        }

        if (isset($map['StaffIdList'])) {
            if (!empty($map['StaffIdList'])) {
                $model->staffIdList = [];
                $n1 = 0;
                foreach ($map['StaffIdList'] as $item1) {
                    $model->staffIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SystemUid'])) {
            $model->systemUid = $map['SystemUid'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
