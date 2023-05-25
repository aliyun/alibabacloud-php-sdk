<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateVersionResponseBody\launchTemplateVersions;

use AlibabaCloud\Tea\Model;

class launchTemplateVersion extends Model
{
    /**
     * @description 实例启动模板ID。
     *
     * @example lt-m5eiaupmvm2op9d****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description 实例启动模板版本号。
     *
     * @example 2
     *
     * @var int
     */
    public $launchTemplateVersionNumber;
    protected $_name = [
        'launchTemplateId'            => 'LaunchTemplateId',
        'launchTemplateVersionNumber' => 'LaunchTemplateVersionNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateVersionNumber) {
            $res['LaunchTemplateVersionNumber'] = $this->launchTemplateVersionNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersionNumber'])) {
            $model->launchTemplateVersionNumber = $map['LaunchTemplateVersionNumber'];
        }

        return $model;
    }
}
