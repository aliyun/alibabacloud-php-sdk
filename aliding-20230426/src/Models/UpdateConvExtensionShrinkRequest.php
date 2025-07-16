<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class UpdateConvExtensionShrinkRequest extends Model
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
     * @var string
     */
    public $staffIdListShrink;

    /**
     * @example 546374856
     *
     * @var string
     */
    public $systemUid;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'mobileUrl' => 'MobileUrl',
        'pcUrl' => 'PcUrl',
        'staffIdListShrink' => 'StaffIdList',
        'systemUid' => 'SystemUid',
        'tenantContextShrink' => 'TenantContext',
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
        if (null !== $this->staffIdListShrink) {
            $res['StaffIdList'] = $this->staffIdListShrink;
        }
        if (null !== $this->systemUid) {
            $res['SystemUid'] = $this->systemUid;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConvExtensionShrinkRequest
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
            $model->staffIdListShrink = $map['StaffIdList'];
        }
        if (isset($map['SystemUid'])) {
            $model->systemUid = $map['SystemUid'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
