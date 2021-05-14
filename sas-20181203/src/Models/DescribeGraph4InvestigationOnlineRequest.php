<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGraph4InvestigationOnlineRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $vertexId;

    /**
     * @var string
     */
    public $anomalyUuid;

    /**
     * @var string
     */
    public $anomalyId;

    /**
     * @var int
     */
    public $pathLength;

    /**
     * @var string
     */
    public $direction;
    protected $_name = [
        'lang'        => 'Lang',
        'namespace'   => 'Namespace',
        'vertexId'    => 'VertexId',
        'anomalyUuid' => 'AnomalyUuid',
        'anomalyId'   => 'AnomalyId',
        'pathLength'  => 'PathLength',
        'direction'   => 'Direction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->vertexId) {
            $res['VertexId'] = $this->vertexId;
        }
        if (null !== $this->anomalyUuid) {
            $res['AnomalyUuid'] = $this->anomalyUuid;
        }
        if (null !== $this->anomalyId) {
            $res['AnomalyId'] = $this->anomalyId;
        }
        if (null !== $this->pathLength) {
            $res['PathLength'] = $this->pathLength;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['VertexId'])) {
            $model->vertexId = $map['VertexId'];
        }
        if (isset($map['AnomalyUuid'])) {
            $model->anomalyUuid = $map['AnomalyUuid'];
        }
        if (isset($map['AnomalyId'])) {
            $model->anomalyId = $map['AnomalyId'];
        }
        if (isset($map['PathLength'])) {
            $model->pathLength = $map['PathLength'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        return $model;
    }
}
