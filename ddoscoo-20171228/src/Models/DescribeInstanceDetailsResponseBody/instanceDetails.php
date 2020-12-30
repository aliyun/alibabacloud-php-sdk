<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponseBody\instanceDetails\eipInfoList;
use AlibabaCloud\Tea\Model;

class instanceDetails extends Model
{
    /**
     * @var eipInfoList[]
     */
    public $eipInfoList;

    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'eipInfoList' => 'EipInfoList',
        'line'        => 'Line',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipInfoList) {
            $res['EipInfoList'] = [];
            if (null !== $this->eipInfoList && \is_array($this->eipInfoList)) {
                $n = 0;
                foreach ($this->eipInfoList as $item) {
                    $res['EipInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipInfoList'])) {
            if (!empty($map['EipInfoList'])) {
                $model->eipInfoList = [];
                $n                  = 0;
                foreach ($map['EipInfoList'] as $item) {
                    $model->eipInfoList[$n++] = null !== $item ? eipInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
