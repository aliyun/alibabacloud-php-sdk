<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponseBody\launchTemplateSets\launchTemplateSet;

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
        if (\is_array($this->launchTemplateSet)) {
            Model::validateArray($this->launchTemplateSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->launchTemplateSet) {
            if (\is_array($this->launchTemplateSet)) {
                $res['LaunchTemplateSet'] = [];
                $n1 = 0;
                foreach ($this->launchTemplateSet as $item1) {
                    $res['LaunchTemplateSet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LaunchTemplateSet'])) {
            if (!empty($map['LaunchTemplateSet'])) {
                $model->launchTemplateSet = [];
                $n1 = 0;
                foreach ($map['LaunchTemplateSet'] as $item1) {
                    $model->launchTemplateSet[$n1] = launchTemplateSet::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
