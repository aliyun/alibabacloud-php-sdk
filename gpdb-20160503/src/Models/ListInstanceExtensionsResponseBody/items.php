<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListInstanceExtensionsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extensionId;

    /**
     * @var string
     */
    public $installedDatabases;

    /**
     * @var bool
     */
    public $isInstallNeedRestart;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'currentVersion' => 'CurrentVersion',
        'description' => 'Description',
        'extensionId' => 'ExtensionId',
        'installedDatabases' => 'InstalledDatabases',
        'isInstallNeedRestart' => 'IsInstallNeedRestart',
        'latestVersion' => 'LatestVersion',
        'name' => 'Name',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
