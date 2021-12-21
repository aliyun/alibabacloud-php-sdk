<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class ListFlowNodeSqlResultRequest extends Model
{
    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $nodeInstanceId;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
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
