<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeExtensionResponseBody extends Model
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
    public $extensionName;

    /**
     * @var bool
     */
    public $isInstallNeedRestart;

    /**
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'currentVersion' => 'CurrentVersion',
        'description' => 'Description',
        'extensionId' => 'ExtensionId',
        'extensionName' => 'ExtensionName',
        'isInstallNeedRestart' => 'IsInstallNeedRestart',
        'isLatestVersion' => 'IsLatestVersion',
        'latestVersion' => 'LatestVersion',
        'requestId' => 'RequestId',
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

        if (null !== $this->extensionName) {
            $res['ExtensionName'] = $this->extensionName;
        }

        if (null !== $this->isInstallNeedRestart) {
            $res['IsInstallNeedRestart'] = $this->isInstallNeedRestart;
        }

        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }

        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['ExtensionName'])) {
            $model->extensionName = $map['ExtensionName'];
        }

        if (isset($map['IsInstallNeedRestart'])) {
            $model->isInstallNeedRestart = $map['IsInstallNeedRestart'];
        }

        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }

        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
