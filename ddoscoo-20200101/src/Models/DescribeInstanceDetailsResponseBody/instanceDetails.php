<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceDetailsResponseBody\instanceDetails\eipInfos;
use AlibabaCloud\Tea\Model;

class instanceDetails extends Model
{
    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var eipInfos[]
     */
    public $eipInfos;
    protected $_name = [
        'line'       => 'Line',
        'instanceId' => 'InstanceId',
        'eipInfos'   => 'EipInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->eipInfos) {
            $res['EipInfos'] = [];
            if (null !== $this->eipInfos && \is_array($this->eipInfos)) {
                $n = 0;
                foreach ($this->eipInfos as $item) {
                    $res['EipInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['EipInfos'])) {
            if (!empty($map['EipInfos'])) {
                $model->eipInfos = [];
                $n               = 0;
                foreach ($map['EipInfos'] as $item) {
                    $model->eipInfos[$n++] = null !== $item ? eipInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
