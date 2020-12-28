<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListActiveAppsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $lastHealthPingTime;

    /**
     * @var int
     */
    public $currentLevel;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $appType;

    /**
     * @var int
     */
    public $dirtyLevel;

    /**
     * @var string
     */
    public $ahasAppName;
    protected $_name = [
        'appName'            => 'AppName',
        'lastHealthPingTime' => 'LastHealthPingTime',
        'currentLevel'       => 'CurrentLevel',
        'namespace'          => 'Namespace',
        'appType'            => 'AppType',
        'dirtyLevel'         => 'DirtyLevel',
        'ahasAppName'        => 'AhasAppName',
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
        if (null !== $this->lastHealthPingTime) {
            $res['LastHealthPingTime'] = $this->lastHealthPingTime;
        }
        if (null !== $this->currentLevel) {
            $res['CurrentLevel'] = $this->currentLevel;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->dirtyLevel) {
            $res['DirtyLevel'] = $this->dirtyLevel;
        }
        if (null !== $this->ahasAppName) {
            $res['AhasAppName'] = $this->ahasAppName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['LastHealthPingTime'])) {
            $model->lastHealthPingTime = $map['LastHealthPingTime'];
        }
        if (isset($map['CurrentLevel'])) {
            $model->currentLevel = $map['CurrentLevel'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['DirtyLevel'])) {
            $model->dirtyLevel = $map['DirtyLevel'];
        }
        if (isset($map['AhasAppName'])) {
            $model->ahasAppName = $map['AhasAppName'];
        }

        return $model;
    }
}
