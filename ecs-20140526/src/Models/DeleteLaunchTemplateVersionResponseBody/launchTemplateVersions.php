<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateVersionResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateVersionResponseBody\launchTemplateVersions\launchTemplateVersion;
use AlibabaCloud\Tea\Model;

class launchTemplateVersions extends Model
{
    /**
     * @var launchTemplateVersion[]
     */
    public $launchTemplateVersion;
    protected $_name = [
        'launchTemplateVersion' => 'LaunchTemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = [];
            if (null !== $this->launchTemplateVersion && \is_array($this->launchTemplateVersion)) {
                $n = 0;
                foreach ($this->launchTemplateVersion as $item) {
                    $res['LaunchTemplateVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateVersion'])) {
            if (!empty($map['LaunchTemplateVersion'])) {
                $model->launchTemplateVersion = [];
                $n                            = 0;
                foreach ($map['LaunchTemplateVersion'] as $item) {
                    $model->launchTemplateVersion[$n++] = null !== $item ? launchTemplateVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
