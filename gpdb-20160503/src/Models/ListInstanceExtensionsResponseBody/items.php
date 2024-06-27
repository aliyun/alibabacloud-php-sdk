<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListInstanceExtensionsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The current version.
     *
     * @example 1.0
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The description of the extension.
     *
     * @example citext usage
     *
     * @var string
     */
    public $description;

    /**
     * @description The extension ID.
     *
     * @example 1
     *
     * @var string
     */
    public $extensionId;

    /**
     * @description The names of the databases in which the extension is installed.
     *
     * @example test
     *
     * @var string
     */
    public $installedDatabases;

    /**
     * @description Indicates whether an instance restart is required after you install the extension for the extension to take effect.
     *
     * @example false
     *
     * @var bool
     */
    public $isInstallNeedRestart;

    /**
     * @description The latest version.
     *
     * @example 1.1
     *
     * @var string
     */
    public $latestVersion;

    /**
     * @description The name of the extension.
     *
     * @example citext
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the extension.
     *
     * @example installed
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentVersion'       => 'CurrentVersion',
        'description'          => 'Description',
        'extensionId'          => 'ExtensionId',
        'installedDatabases'   => 'InstalledDatabases',
        'isInstallNeedRestart' => 'IsInstallNeedRestart',
        'latestVersion'        => 'LatestVersion',
        'name'                 => 'Name',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extensionId) {
            $res['ExtensionId'] = $this->extensionId;
        }
        if (null !== $this->installedDatabases) {
            $res['InstalledDatabases'] = $this->installedDatabases;
        }
        if (null !== $this->isInstallNeedRestart) {
            $res['IsInstallNeedRestart'] = $this->isInstallNeedRestart;
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExtensionId'])) {
            $model->extensionId = $map['ExtensionId'];
        }
        if (isset($map['InstalledDatabases'])) {
            $model->installedDatabases = $map['InstalledDatabases'];
        }
        if (isset($map['IsInstallNeedRestart'])) {
            $model->isInstallNeedRestart = $map['IsInstallNeedRestart'];
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
