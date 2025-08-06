<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateVersionResponseBody\launchTemplateVersions\launchTemplateVersion;

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
        if (\is_array($this->launchTemplateVersion)) {
            Model::validateArray($this->launchTemplateVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->launchTemplateVersion) {
            if (\is_array($this->launchTemplateVersion)) {
                $res['LaunchTemplateVersion'] = [];
                $n1 = 0;
                foreach ($this->launchTemplateVersion as $item1) {
                    $res['LaunchTemplateVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['LaunchTemplateVersion'])) {
            if (!empty($map['LaunchTemplateVersion'])) {
                $model->launchTemplateVersion = [];
                $n1 = 0;
                foreach ($map['LaunchTemplateVersion'] as $item1) {
                    $model->launchTemplateVersion[$n1] = launchTemplateVersion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
