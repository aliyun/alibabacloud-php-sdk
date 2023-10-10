<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\conf;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\imageInfo;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\latestVersion;
use AlibabaCloud\Tea\Model;

class applcation extends Model
{
    /**
     * @description The basic information about the application.
     *
     * @var app
     */
    public $app;

    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example a5281053-****-47a5-b2ab-5c0323de****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The configurations.
     *
     * @var conf
     */
    public $conf;

    /**
     * @description The information about the instance group in which the application is deployed.
     *
     * @var deployGroups
     */
    public $deployGroups;

    /**
     * @description The information about the image.
     *
     * @var imageInfo
     */
    public $imageInfo;

    /**
     * @description The information about the latest version.
     *
     * @var latestVersion
     */
    public $latestVersion;
    protected $_name = [
        'app'           => 'App',
        'appId'         => 'AppId',
        'conf'          => 'Conf',
        'deployGroups'  => 'DeployGroups',
        'imageInfo'     => 'ImageInfo',
        'latestVersion' => 'LatestVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = null !== $this->app ? $this->app->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->conf) {
            $res['Conf'] = null !== $this->conf ? $this->conf->toMap() : null;
        }
        if (null !== $this->deployGroups) {
            $res['DeployGroups'] = null !== $this->deployGroups ? $this->deployGroups->toMap() : null;
        }
        if (null !== $this->imageInfo) {
            $res['ImageInfo'] = null !== $this->imageInfo ? $this->imageInfo->toMap() : null;
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = null !== $this->latestVersion ? $this->latestVersion->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applcation
     */
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
