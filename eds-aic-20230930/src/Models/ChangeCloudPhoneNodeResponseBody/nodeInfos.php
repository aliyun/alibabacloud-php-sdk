<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ChangeCloudPhoneNodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\ChangeCloudPhoneNodeResponseBody\nodeInfos\instanceInfos;

class nodeInfos extends Model
{
    /**
     * @var instanceInfos[]
     */
    public $instanceInfos;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $shareDataVolume;
    protected $_name = [
        'instanceInfos' => 'InstanceInfos',
        'nodeId' => 'NodeId',
        'shareDataVolume' => 'ShareDataVolume',
    ];

    public function validate()
    {
        if (\is_array($this->instanceInfos)) {
            Model::validateArray($this->instanceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceInfos) {
            if (\is_array($this->instanceInfos)) {
                $res['InstanceInfos'] = [];
                $n1 = 0;
                foreach ($this->instanceInfos as $item1) {
                    $res['InstanceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->shareDataVolume) {
            $res['ShareDataVolume'] = $this->shareDataVolume;
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
        if (isset($map['InstanceInfos'])) {
            if (!empty($map['InstanceInfos'])) {
                $model->instanceInfos = [];
                $n1 = 0;
                foreach ($map['InstanceInfos'] as $item1) {
                    $model->instanceInfos[$n1] = instanceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['ShareDataVolume'])) {
            $model->shareDataVolume = $map['ShareDataVolume'];
        }

        return $model;
    }
}
