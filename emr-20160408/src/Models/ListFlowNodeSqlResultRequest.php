<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListFlowNodeSqlResultRequest extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $length;

    /**
     * @example FE4BD156E939****
     *
     * @var string
     */
    public $nodeInstanceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @example FP-7A1018ADE917****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 0
     *
     * @var int
     */
    public $sqlIndex;
    protected $_name = [
        'length'         => 'Length',
        'nodeInstanceId' => 'NodeInstanceId',
        'offset'         => 'Offset',
        'projectId'      => 'ProjectId',
        'regionId'       => 'RegionId',
        'sqlIndex'       => 'SqlIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->nodeInstanceId) {
            $res['NodeInstanceId'] = $this->nodeInstanceId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sqlIndex) {
            $res['SqlIndex'] = $this->sqlIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowNodeSqlResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['NodeInstanceId'])) {
            $model->nodeInstanceId = $map['NodeInstanceId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SqlIndex'])) {
            $model->sqlIndex = $map['SqlIndex'];
        }

        return $model;
    }
}
