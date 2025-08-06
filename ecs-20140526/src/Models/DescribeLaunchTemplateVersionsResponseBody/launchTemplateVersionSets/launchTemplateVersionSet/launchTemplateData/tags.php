<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\tags\instanceTag;

class tags extends Model
{
    /**
     * @var instanceTag[]
     */
    public $instanceTag;
    protected $_name = [
        'instanceTag' => 'InstanceTag',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTag)) {
            Model::validateArray($this->instanceTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTag) {
            if (\is_array($this->instanceTag)) {
                $res['InstanceTag'] = [];
                $n1 = 0;
                foreach ($this->instanceTag as $item1) {
                    $res['InstanceTag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceTag'])) {
            if (!empty($map['InstanceTag'])) {
                $model->instanceTag = [];
                $n1 = 0;
                foreach ($map['InstanceTag'] as $item1) {
                    $model->instanceTag[$n1] = instanceTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
