<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records;
use AlibabaCloud\Tea\Model;

class monitorDatas extends Model
{
    /**
     * @var records[]
     */
    public $records;

    /**
     * @var containerInfos[]
     */
    public $containerInfos;

    /**
     * @var string
     */
    public $containerGroupId;
    protected $_name = [
        'records'          => 'Records',
        'containerInfos'   => 'ContainerInfos',
        'containerGroupId' => 'ContainerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->records) {
            $res['Records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->containerInfos) {
            $res['ContainerInfos'] = [];
            if (null !== $this->containerInfos && \is_array($this->containerInfos)) {
                $n = 0;
                foreach ($this->containerInfos as $item) {
                    $res['ContainerInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContainerInfos'])) {
            if (!empty($map['ContainerInfos'])) {
                $model->containerInfos = [];
                $n                     = 0;
                foreach ($map['ContainerInfos'] as $item) {
                    $model->containerInfos[$n++] = null !== $item ? containerInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }

        return $model;
    }
}
