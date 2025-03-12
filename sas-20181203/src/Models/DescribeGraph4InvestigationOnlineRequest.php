<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGraph4InvestigationOnlineRequest extends Model
{
    /**
     * @description The ID of the alert event. You can call [DescribeSuspEvents](~~DescribeSuspEvents~~) to obtain the alert event ID, with the value path being: data.SuspEvents[index].UniqueInfo.
     *
     * @example 786fc80896b25422b5324cb6e57bxxxx
     *
     * @var string
     */
    public $anomalyId;

    /**
     * @description The UUID of the alert event asset. You can call [DescribeSuspEvents](~~DescribeSuspEvents~~) to obtain the asset UUID, with the value path being: data.SuspEvents[index].Uuid.
     *
     * @example 3502e4b0-f362-4059-84a2-f47fa2b5exxx
     *
     * @var string
     */
    public $anomalyUuid;

    /**
     * @description Sets the language type for the request and response messages. The default is **zh**. Values:
     *
     * - **zh**: Chinese
     * - **en**: English
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The namespace of the graph, which is fixed as: hundun_dc_online.
     *
     * This parameter is required.
     * @example hundun_dc_online
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Vertex ID. This does not need to be proactively provided.
     *
     * @example 29872354f741b1b044b8a9b4e2ab****
     *
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
