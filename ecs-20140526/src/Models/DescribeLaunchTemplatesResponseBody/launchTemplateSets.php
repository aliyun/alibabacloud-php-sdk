<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponseBody\launchTemplateSets\launchTemplateSet;
use AlibabaCloud\Tea\Model;

class launchTemplateSets extends Model
{
    /**
     * @var launchTemplateSet[]
     */
    public $launchTemplateSet;
    protected $_name = [
        'launchTemplateSet' => 'LaunchTemplateSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateSet) {
            $res['LaunchTemplateSet'] = [];
            if (null !== $this->launchTemplateSet && \is_array($this->launchTemplateSet)) {
                $n = 0;
                foreach ($this->launchTemplateSet as $item) {
                    $res['LaunchTemplateSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateSet'])) {
            if (!empty($map['LaunchTemplateSet'])) {
                $model->launchTemplateSet = [];
                $n                        = 0;
                foreach ($map['LaunchTemplateSet'] as $item) {
                    $model->launchTemplateSet[$n++] = null !== $item ? launchTemplateSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
