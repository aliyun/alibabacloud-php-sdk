<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet;
use AlibabaCloud\Tea\Model;

class launchTemplateVersionSets extends Model
{
    /**
     * @var launchTemplateVersionSet[]
     */
    public $launchTemplateVersionSet;
    protected $_name = [
        'launchTemplateVersionSet' => 'LaunchTemplateVersionSet',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateVersionSet) {
            $res['LaunchTemplateVersionSet'] = [];
            if (null !== $this->launchTemplateVersionSet && \is_array($this->launchTemplateVersionSet)) {
                $n = 0;
                foreach ($this->launchTemplateVersionSet as $item) {
                    $res['LaunchTemplateVersionSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateVersionSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateVersionSet'])) {
            if (!empty($map['LaunchTemplateVersionSet'])) {
                $model->launchTemplateVersionSet = [];
                $n = 0;
                foreach ($map['LaunchTemplateVersionSet'] as $item) {
                    $model->launchTemplateVersionSet[$n++] = null !== $item ? launchTemplateVersionSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
