<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet;

class launchTemplateVersionSets extends Model
{
    /**
     * @var launchTemplateVersionSet[]
     */
    public $launchTemplateVersionSet;
    protected $_name = [
        'launchTemplateVersionSet' => 'LaunchTemplateVersionSet',
    ];

    public function validate()
    {
        if (\is_array($this->launchTemplateVersionSet)) {
            Model::validateArray($this->launchTemplateVersionSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->launchTemplateVersionSet) {
            if (\is_array($this->launchTemplateVersionSet)) {
                $res['LaunchTemplateVersionSet'] = [];
                $n1 = 0;
                foreach ($this->launchTemplateVersionSet as $item1) {
                    $res['LaunchTemplateVersionSet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LaunchTemplateVersionSet'])) {
            if (!empty($map['LaunchTemplateVersionSet'])) {
                $model->launchTemplateVersionSet = [];
                $n1 = 0;
                foreach ($map['LaunchTemplateVersionSet'] as $item1) {
                    $model->launchTemplateVersionSet[$n1] = launchTemplateVersionSet::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
