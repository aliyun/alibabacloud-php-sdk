<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentResponseBody\data;

use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $installScript;

    /**
     * @var string
     */
    public $uninstallScript;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $upgradeScript;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'createdAt' => 'created_at',
        'installScript' => 'install_script',
        'uninstallScript' => 'uninstall_script',
        'updatedAt' => 'updated_at',
        'upgradeScript' => 'upgrade_script',
        'version' => 'version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->installScript) {
            $res['install_script'] = $this->installScript;
        }
        if (null !== $this->uninstallScript) {
            $res['uninstall_script'] = $this->uninstallScript;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }
        if (null !== $this->upgradeScript) {
            $res['upgrade_script'] = $this->upgradeScript;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['install_script'])) {
            $model->installScript = $map['install_script'];
        }
        if (isset($map['uninstall_script'])) {
            $model->uninstallScript = $map['uninstall_script'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }
        if (isset($map['upgrade_script'])) {
            $model->upgradeScript = $map['upgrade_script'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
