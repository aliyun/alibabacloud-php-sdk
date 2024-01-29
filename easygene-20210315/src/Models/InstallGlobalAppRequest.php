<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class InstallGlobalAppRequest extends Model
{
    /**
     * @example joint-calling
     *
     * @var string
     */
    public $appName;

    /**
     * @example joint-calling
     *
     * @var string
     */
    public $installedAppName;

    /**
     * @example sentieon
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @example EasyGene
     *
     * @var string
     */
    public $source;

    /**
     * @example default-workspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'          => 'AppName',
        'installedAppName' => 'InstalledAppName',
        'namespaceName'    => 'NamespaceName',
        'source'           => 'Source',
        'workspace'        => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->installedAppName) {
            $res['InstalledAppName'] = $this->installedAppName;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallGlobalAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['InstalledAppName'])) {
            $model->installedAppName = $map['InstalledAppName'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
