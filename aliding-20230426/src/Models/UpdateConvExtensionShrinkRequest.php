<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class UpdateConvExtensionShrinkRequest extends Model
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
     * @var string
     */
    public $staffIdListShrink;

    /**
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

    public function validate()
    {
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
