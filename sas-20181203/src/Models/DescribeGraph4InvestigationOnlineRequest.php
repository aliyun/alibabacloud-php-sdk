<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGraph4InvestigationOnlineRequest extends Model
{
    /**
     * @var string
     */
    public $anomalyId;

    /**
     * @var string
     */
    public $anomalyUuid;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $pathLength;

    /**
     * @var string
     */
    public $vertexId;
    protected $_name = [
        'anomalyId'   => 'AnomalyId',
        'anomalyUuid' => 'AnomalyUuid',
        'direction'   => 'Direction',
        'lang'        => 'Lang',
        'namespace'   => 'Namespace',
        'pathLength'  => 'PathLength',
        'vertexId'    => 'VertexId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anomalyId) {
            $res['AnomalyId'] = $this->anomalyId;
        }
        if (null !== $this->anomalyUuid) {
            $res['AnomalyUuid'] = $this->anomalyUuid;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pathLength) {
            $res['PathLength'] = $this->pathLength;
        }
        if (null !== $this->vertexId) {
            $res['VertexId'] = $this->vertexId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGraph4InvestigationOnlineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnomalyId'])) {
            $model->anomalyId = $map['AnomalyId'];
        }
        if (isset($map['AnomalyUuid'])) {
            $model->anomalyUuid = $map['AnomalyUuid'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PathLength'])) {
            $model->pathLength = $map['PathLength'];
        }
        if (isset($map['VertexId'])) {
            $model->vertexId = $map['VertexId'];
        }

        return $model;
    }
}
