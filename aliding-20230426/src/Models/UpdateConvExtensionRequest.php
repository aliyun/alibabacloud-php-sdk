<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateConvExtensionRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class UpdateConvExtensionRequest extends Model
{
    /**
     * @example https://xxx
     *
     * @var string
     */
    public $mobileUrl;

    /**
     * @example https://xxx
     *
     * @var string
     */
    public $pcUrl;

    /**
     * @var string[]
     */
    public $staffIdList;

    /**
     * @example 546374856
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobileUrl) {
            $res['MobileUrl'] = $this->mobileUrl;
        }
        if (null !== $this->pcUrl) {
            $res['PcUrl'] = $this->pcUrl;
        }
        if (null !== $this->staffIdList) {
            $res['StaffIdList'] = $this->staffIdList;
        }
        if (null !== $this->systemUid) {
            $res['SystemUid'] = $this->systemUid;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConvExtensionRequest
     */
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
                $model->staffIdList = $map['StaffIdList'];
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
