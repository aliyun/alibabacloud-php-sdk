<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class AppsSettings extends Model
{
    /**
     * @description AppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description 云帐号Id
     *
     * @var string
     */
    public $cloudUid;

    /**
     * @description 客户非敏感信息
     *
     * @var CommonCustomer
     */
    public $customer;

    /**
     * @description 互动视频配置
     *
     * @var AppsInteractiveVideoSettings
     */
    public $interactiveVideoSettings;
    protected $_name = [
        'appId'                    => 'AppId',
        'cloudUid'                 => 'CloudUid',
        'customer'                 => 'Customer',
        'interactiveVideoSettings' => 'InteractiveVideoSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cloudUid) {
            $res['CloudUid'] = $this->cloudUid;
        }
        if (null !== $this->customer) {
            $res['Customer'] = null !== $this->customer ? $this->customer->toMap() : null;
        }
        if (null !== $this->interactiveVideoSettings) {
            $res['InteractiveVideoSettings'] = null !== $this->interactiveVideoSettings ? $this->interactiveVideoSettings->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppsSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CloudUid'])) {
            $model->cloudUid = $map['CloudUid'];
        }
        if (isset($map['Customer'])) {
            $model->customer = CommonCustomer::fromMap($map['Customer']);
        }
        if (isset($map['InteractiveVideoSettings'])) {
            $model->interactiveVideoSettings = AppsInteractiveVideoSettings::fromMap($map['InteractiveVideoSettings']);
        }

        return $model;
    }
}
