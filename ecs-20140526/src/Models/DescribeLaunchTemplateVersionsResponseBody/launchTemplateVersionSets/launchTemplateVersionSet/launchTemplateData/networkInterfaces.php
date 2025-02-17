<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\networkInterfaces\networkInterface;

class networkInterfaces extends Model
{
    /**
     * @var networkInterface[]
     */
    public $networkInterface;
    protected $_name = [
        'networkInterface' => 'NetworkInterface',
    ];

    public function validate()
    {
        if (\is_array($this->networkInterface)) {
            Model::validateArray($this->networkInterface);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterface) {
            if (\is_array($this->networkInterface)) {
                $res['NetworkInterface'] = [];
                $n1                      = 0;
                foreach ($this->networkInterface as $item1) {
                    $res['NetworkInterface'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkInterface'])) {
            if (!empty($map['NetworkInterface'])) {
                $model->networkInterface = [];
                $n1                      = 0;
                foreach ($map['NetworkInterface'] as $item1) {
                    $model->networkInterface[$n1++] = networkInterface::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
