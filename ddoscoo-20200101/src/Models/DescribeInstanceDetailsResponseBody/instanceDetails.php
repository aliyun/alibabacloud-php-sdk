<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsResponseBody\instanceDetails\eipInfos;

class instanceDetails extends Model
{
    /**
     * @var eipInfos[]
     */
    public $eipInfos;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $line;
    protected $_name = [
        'eipInfos' => 'EipInfos',
        'instanceId' => 'InstanceId',
        'line' => 'Line',
    ];

    public function validate()
    {
        if (\is_array($this->eipInfos)) {
            Model::validateArray($this->eipInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipInfos) {
            if (\is_array($this->eipInfos)) {
                $res['EipInfos'] = [];
                $n1 = 0;
                foreach ($this->eipInfos as $item1) {
                    $res['EipInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->line) {
            $res['Line'] = $this->line;
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
        if (isset($map['EipInfos'])) {
            if (!empty($map['EipInfos'])) {
                $model->eipInfos = [];
                $n1 = 0;
                foreach ($map['EipInfos'] as $item1) {
                    $model->eipInfos[$n1++] = eipInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }

        return $model;
    }
}
