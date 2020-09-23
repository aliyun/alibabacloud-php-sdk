<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusResponseBody\addonInfo;
use AlibabaCloud\Tea\Model;

class DescribeClusterAddonUpgradeStatusResponseBody extends Model
{
    /**
     * @description 组件信息。
     *
     * @var addonInfo
     */
    public $addonInfo;

    /**
     * @description 是否能够升级。
     *
     * @var bool
     */
    public $canUpgrade;

    /**
     * @description 模板信息，采用base64加密。
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'addonInfo'  => 'addon_info',
        'canUpgrade' => 'can_upgrade',
        'template'   => 'template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonInfo) {
            $res['addon_info'] = null !== $this->addonInfo ? $this->addonInfo->toMap() : null;
        }
        if (null !== $this->canUpgrade) {
            $res['can_upgrade'] = $this->canUpgrade;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAddonUpgradeStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addon_info'])) {
            $model->addonInfo = addonInfo::fromMap($map['addon_info']);
        }
        if (isset($map['can_upgrade'])) {
            $model->canUpgrade = $map['can_upgrade'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }

        return $model;
    }
}
