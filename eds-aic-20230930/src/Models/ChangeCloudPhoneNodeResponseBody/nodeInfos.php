<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ChangeCloudPhoneNodeResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\ChangeCloudPhoneNodeResponseBody\nodeInfos\instanceInfos;
use AlibabaCloud\Tea\Model;

class nodeInfos extends Model
{
    /**
     * @var instanceInfos[]
     */
    public $instanceInfos;

    /**
     * @example cpn-e5kxgjyt8s1mb****
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'instanceInfos' => 'InstanceInfos',
        'nodeId' => 'NodeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceInfos) {
            $res['InstanceInfos'] = [];
            if (null !== $this->instanceInfos && \is_array($this->instanceInfos)) {
                $n = 0;
                foreach ($this->instanceInfos as $item) {
                    $res['InstanceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceInfos'])) {
            if (!empty($map['InstanceInfos'])) {
                $model->instanceInfos = [];
                $n = 0;
                foreach ($map['InstanceInfos'] as $item) {
                    $model->instanceInfos[$n++] = null !== $item ? instanceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
