<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeTraceInfoDetailRequest extends Model
{
    /**
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @example 1670555392000
     *
     * @var int
     */
    public $incidentTime;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example SAS_INCIDENT
     *
     * @var string
     */
    public $type;

    /**
     * @example 1627f2d7-aaa2-4ed1-b07a-xxxxxxxxxxxxxx
     *
     * @var string
     */
    public $uuid;

    /**
     * @example cce1d28dxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $vertexId;
    protected $_name = [
        'from'         => 'From',
        'incidentTime' => 'IncidentTime',
        'lang'         => 'Lang',
        'sourceIp'     => 'SourceIp',
        'type'         => 'Type',
        'uuid'         => 'Uuid',
        'vertexId'     => 'VertexId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->incidentTime) {
            $res['IncidentTime'] = $this->incidentTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vertexId) {
            $res['VertexId'] = $this->vertexId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTraceInfoDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['IncidentTime'])) {
            $model->incidentTime = $map['IncidentTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VertexId'])) {
            $model->vertexId = $map['VertexId'];
        }

        return $model;
    }
}
