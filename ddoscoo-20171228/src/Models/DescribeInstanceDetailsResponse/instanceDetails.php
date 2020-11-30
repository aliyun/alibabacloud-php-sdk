<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponse;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponse\instanceDetails\eipInfoList;
use AlibabaCloud\Tea\Model;

class instanceDetails extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $line;

    /**
     * @var eipInfoList[]
     */
    public $eipInfoList;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'line'        => 'Line',
        'eipInfoList' => 'EipInfoList',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('line', $this->line, true);
        Model::validateRequired('eipInfoList', $this->eipInfoList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->eipInfoList) {
            $res['EipInfoList'] = [];
            if (null !== $this->eipInfoList && \is_array($this->eipInfoList)) {
                $n = 0;
                foreach ($this->eipInfoList as $item) {
                    $res['EipInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['EipInfoList'])) {
            if (!empty($map['EipInfoList'])) {
                $model->eipInfoList = [];
                $n                  = 0;
                foreach ($map['EipInfoList'] as $item) {
                    $model->eipInfoList[$n++] = null !== $item ? eipInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
