<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\conf;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\imageInfo;
use AlibabaCloud\Tea\Model;

class applcation extends Model
{
    /**
     * @var conf
     */
    public $conf;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var app
     */
    public $app;

    /**
     * @var deployGroups
     */
    public $deployGroups;

    /**
     * @var imageInfo
     */
    public $imageInfo;
    protected $_name = [
        'conf'         => 'Conf',
        'appId'        => 'AppId',
        'app'          => 'App',
        'deployGroups' => 'DeployGroups',
        'imageInfo'    => 'ImageInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conf) {
            $res['Conf'] = null !== $this->conf ? $this->conf->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->app) {
            $res['App'] = null !== $this->app ? $this->app->toMap() : null;
        }
        if (null !== $this->deployGroups) {
            $res['DeployGroups'] = null !== $this->deployGroups ? $this->deployGroups->toMap() : null;
        }
        if (null !== $this->imageInfo) {
            $res['ImageInfo'] = null !== $this->imageInfo ? $this->imageInfo->toMap() : null;
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
        if (isset($map['Conf'])) {
            $model->conf = conf::fromMap($map['Conf']);
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
        }
        if (isset($map['DeployGroups'])) {
            $model->deployGroups = deployGroups::fromMap($map['DeployGroups']);
        }
        if (isset($map['ImageInfo'])) {
            $model->imageInfo = imageInfo::fromMap($map['ImageInfo']);
        }

        return $model;
    }
}
