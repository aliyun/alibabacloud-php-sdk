<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\QueryExperimentVisualizationDataResponseBody;

use AlibabaCloud\Tea\Model;

class visualizationData extends Model
{
    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1,2,3,4,5
     *
     * @var string
     */
    public $data;

    /**
     * @example dataId1
     *
     * @var string
     */
    public $dataId;

    /**
     * @example node-ux55ier8axzo2xelcc
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'data'       => 'Data',
        'dataId'     => 'DataId',
        'nodeId'     => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return visualizationData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
