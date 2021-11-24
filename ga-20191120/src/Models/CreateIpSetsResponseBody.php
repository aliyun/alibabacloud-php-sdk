<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsResponseBody\ipSets;
use AlibabaCloud\Tea\Model;

class CreateIpSetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var ipSets[]
     */
    public $ipSets;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'ipSets'        => 'IpSets',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->ipSets) {
            $res['IpSets'] = [];
            if (null !== $this->ipSets && \is_array($this->ipSets)) {
                $n = 0;
                foreach ($this->ipSets as $item) {
                    $res['IpSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpSetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['IpSets'])) {
            if (!empty($map['IpSets'])) {
                $model->ipSets = [];
                $n             = 0;
                foreach ($map['IpSets'] as $item) {
                    $model->ipSets[$n++] = null !== $item ? ipSets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
