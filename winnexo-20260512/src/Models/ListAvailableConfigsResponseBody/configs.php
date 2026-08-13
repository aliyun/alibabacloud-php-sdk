<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAvailableConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class configs extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $ssoSettingsId;

    /**
     * @var string
     */
    public $ssoSettingsName;
    protected $_name = [
        'corpId' => 'corpId',
        'corpName' => 'corpName',
        'platformType' => 'platformType',
        'ssoSettingsId' => 'ssoSettingsId',
        'ssoSettingsName' => 'ssoSettingsName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }

        if (null !== $this->corpName) {
            $res['corpName'] = $this->corpName;
        }

        if (null !== $this->platformType) {
            $res['platformType'] = $this->platformType;
        }

        if (null !== $this->ssoSettingsId) {
            $res['ssoSettingsId'] = $this->ssoSettingsId;
        }

        if (null !== $this->ssoSettingsName) {
            $res['ssoSettingsName'] = $this->ssoSettingsName;
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
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }

        if (isset($map['corpName'])) {
            $model->corpName = $map['corpName'];
        }

        if (isset($map['platformType'])) {
            $model->platformType = $map['platformType'];
        }

        if (isset($map['ssoSettingsId'])) {
            $model->ssoSettingsId = $map['ssoSettingsId'];
        }

        if (isset($map['ssoSettingsName'])) {
            $model->ssoSettingsName = $map['ssoSettingsName'];
        }

        return $model;
    }
}
