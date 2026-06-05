<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetMiniAppBindingResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authStatus;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var bool
     */
    public $icpFiled;

    /**
     * @var string
     */
    public $platformAppid;

    /**
     * @var string
     */
    public $previewQrCodeUrl;

    /**
     * @var string
     */
    public $productionQrCodeUrl;

    /**
     * @var string[]
     */
    public $settingValues;
    protected $_name = [
        'authStatus' => 'AuthStatus',
        'bizId' => 'BizId',
        'icpFiled' => 'IcpFiled',
        'platformAppid' => 'PlatformAppid',
        'previewQrCodeUrl' => 'PreviewQrCodeUrl',
        'productionQrCodeUrl' => 'ProductionQrCodeUrl',
        'settingValues' => 'SettingValues',
    ];

    public function validate()
    {
        if (\is_array($this->settingValues)) {
            Model::validateArray($this->settingValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->icpFiled) {
            $res['IcpFiled'] = $this->icpFiled;
        }

        if (null !== $this->platformAppid) {
            $res['PlatformAppid'] = $this->platformAppid;
        }

        if (null !== $this->previewQrCodeUrl) {
            $res['PreviewQrCodeUrl'] = $this->previewQrCodeUrl;
        }

        if (null !== $this->productionQrCodeUrl) {
            $res['ProductionQrCodeUrl'] = $this->productionQrCodeUrl;
        }

        if (null !== $this->settingValues) {
            if (\is_array($this->settingValues)) {
                $res['SettingValues'] = [];
                foreach ($this->settingValues as $key1 => $value1) {
                    $res['SettingValues'][$key1] = $value1;
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
        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['IcpFiled'])) {
            $model->icpFiled = $map['IcpFiled'];
        }

        if (isset($map['PlatformAppid'])) {
            $model->platformAppid = $map['PlatformAppid'];
        }

        if (isset($map['PreviewQrCodeUrl'])) {
            $model->previewQrCodeUrl = $map['PreviewQrCodeUrl'];
        }

        if (isset($map['ProductionQrCodeUrl'])) {
            $model->productionQrCodeUrl = $map['ProductionQrCodeUrl'];
        }

        if (isset($map['SettingValues'])) {
            if (!empty($map['SettingValues'])) {
                $model->settingValues = [];
                foreach ($map['SettingValues'] as $key1 => $value1) {
                    $model->settingValues[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
