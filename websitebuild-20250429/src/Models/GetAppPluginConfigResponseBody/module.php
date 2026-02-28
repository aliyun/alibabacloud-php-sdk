<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppPluginConfigResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $pluginConfig;

    /**
     * @var string
     */
    public $pluginDesc;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $pluginName;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId' => 'BizId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'pluginConfig' => 'PluginConfig',
        'pluginDesc' => 'PluginDesc',
        'pluginId' => 'PluginId',
        'pluginName' => 'PluginName',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->pluginConfig) {
            $res['PluginConfig'] = $this->pluginConfig;
        }

        if (null !== $this->pluginDesc) {
            $res['PluginDesc'] = $this->pluginDesc;
        }

        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }

        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['PluginConfig'])) {
            $model->pluginConfig = $map['PluginConfig'];
        }

        if (isset($map['PluginDesc'])) {
            $model->pluginDesc = $map['PluginDesc'];
        }

        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
