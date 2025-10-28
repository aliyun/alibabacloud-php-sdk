<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\conf;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\imageInfo;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\latestVersion;

class applcation extends Model
{
    /**
     * @var app
     */
    public $app;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var conf
     */
    public $conf;

    /**
     * @var deployGroups
     */
    public $deployGroups;

    /**
     * @var imageInfo
     */
    public $imageInfo;

    /**
     * @var latestVersion
     */
    public $latestVersion;
    protected $_name = [
        'app' => 'App',
        'appId' => 'AppId',
        'conf' => 'Conf',
        'deployGroups' => 'DeployGroups',
        'imageInfo' => 'ImageInfo',
        'latestVersion' => 'LatestVersion',
    ];

    public function validate()
    {
        if (null !== $this->app) {
            $this->app->validate();
        }
        if (null !== $this->conf) {
            $this->conf->validate();
        }
        if (null !== $this->deployGroups) {
            $this->deployGroups->validate();
        }
        if (null !== $this->imageInfo) {
            $this->imageInfo->validate();
        }
        if (null !== $this->latestVersion) {
            $this->latestVersion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = null !== $this->app ? $this->app->toArray($noStream) : $this->app;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->conf) {
            $res['Conf'] = null !== $this->conf ? $this->conf->toArray($noStream) : $this->conf;
        }

        if (null !== $this->deployGroups) {
            $res['DeployGroups'] = null !== $this->deployGroups ? $this->deployGroups->toArray($noStream) : $this->deployGroups;
        }

        if (null !== $this->imageInfo) {
            $res['ImageInfo'] = null !== $this->imageInfo ? $this->imageInfo->toArray($noStream) : $this->imageInfo;
        }

        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = null !== $this->latestVersion ? $this->latestVersion->toArray($noStream) : $this->latestVersion;
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
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Conf'])) {
            $model->conf = conf::fromMap($map['Conf']);
        }

        if (isset($map['DeployGroups'])) {
            $model->deployGroups = deployGroups::fromMap($map['DeployGroups']);
        }

        if (isset($map['ImageInfo'])) {
            $model->imageInfo = imageInfo::fromMap($map['ImageInfo']);
        }

        if (isset($map['LatestVersion'])) {
            $model->latestVersion = latestVersion::fromMap($map['LatestVersion']);
        }

        return $model;
    }
}
