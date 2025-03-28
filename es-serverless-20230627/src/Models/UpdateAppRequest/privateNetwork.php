<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest\privateNetwork\whiteIpGroup;
use AlibabaCloud\Tea\Model;

class privateNetwork extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $pvlEndpointId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var whiteIpGroup[]
     */
    public $whiteIpGroup;
    protected $_name = [
        'enabled' => 'enabled',
        'pvlEndpointId' => 'pvlEndpointId',
        'type' => 'type',
        'vpcId' => 'vpcId',
        'whiteIpGroup' => 'whiteIpGroup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->pvlEndpointId) {
            $res['pvlEndpointId'] = $this->pvlEndpointId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->whiteIpGroup) {
            $res['whiteIpGroup'] = [];
            if (null !== $this->whiteIpGroup && \is_array($this->whiteIpGroup)) {
                $n = 0;
                foreach ($this->whiteIpGroup as $item) {
                    $res['whiteIpGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateNetwork
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['pvlEndpointId'])) {
            $model->pvlEndpointId = $map['pvlEndpointId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['whiteIpGroup'])) {
            if (!empty($map['whiteIpGroup'])) {
                $model->whiteIpGroup = [];
                $n = 0;
                foreach ($map['whiteIpGroup'] as $item) {
                    $model->whiteIpGroup[$n++] = null !== $item ? whiteIpGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
