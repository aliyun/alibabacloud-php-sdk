<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponseBody\instanceDetails\eipInfoList;

class instanceDetails extends Model
{
    /**
     * @var eipInfoList[]
     */
    public $eipInfoList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $line;
    protected $_name = [
        'eipInfoList' => 'EipInfoList',
        'instanceId' => 'InstanceId',
        'line' => 'Line',
    ];

    public function validate()
    {
        if (\is_array($this->eipInfoList)) {
            Model::validateArray($this->eipInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipInfoList) {
            if (\is_array($this->eipInfoList)) {
                $res['EipInfoList'] = [];
                $n1 = 0;
                foreach ($this->eipInfoList as $item1) {
                    $res['EipInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EipInfoList'])) {
            if (!empty($map['EipInfoList'])) {
                $model->eipInfoList = [];
                $n1 = 0;
                foreach ($map['EipInfoList'] as $item1) {
                    $model->eipInfoList[$n1++] = eipInfoList::fromMap($item1);
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
