<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

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
    public $lang;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $vertexId;
    protected $_name = [
        'anomalyId'   => 'AnomalyId',
        'anomalyUuid' => 'AnomalyUuid',
        'lang'        => 'Lang',
        'namespace'   => 'Namespace',
        'vertexId'    => 'VertexId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anomalyId) {
            $res['AnomalyId'] = $this->anomalyId;
        }

        if (null !== $this->anomalyUuid) {
            $res['AnomalyUuid'] = $this->anomalyUuid;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->vertexId) {
            $res['VertexId'] = $this->vertexId;
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
        if (isset($map['AnomalyId'])) {
            $model->anomalyId = $map['AnomalyId'];
        }

        if (isset($map['AnomalyUuid'])) {
            $model->anomalyUuid = $map['AnomalyUuid'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['VertexId'])) {
            $model->vertexId = $map['VertexId'];
        }

        return $model;
    }
}
