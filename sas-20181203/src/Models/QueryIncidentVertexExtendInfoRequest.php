<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryIncidentVertexExtendInfoRequest extends Model
{
    /**
     * @description The page number. Valid values start from 1.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The type of the edge that you want to query. Valid values include but are not limited to:
     *
     *   **process_exec_file:** A process executes a file.
     *   **process_connect_ip:** A process connects to an IP address.
     *   **domain_trgger_alert:** A domain name triggers an alert.
     *
     * This parameter is required.
     * @example process_connect_ip
     *
     * @var string
     */
    public $relationType;

    /**
     * @description The number of entries per page. Valid values start from 1.
     *
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the node that you want to query.
     *
     * This parameter is required.
     * @example 29872354f741b1b044b8a9b4e2ab0535
     *
     * @var string
     */
    public $vertexId;

    /**
     * @description The node label. Valid values include but are not limited to:
     *
     *   **process**
     *   **file**
     *   **alert**
     *   **ip**
     *   **domain**
     *
     * This parameter is required.
     * @example process
     *
     * @var string
     */
    public $vertexLabel;
    protected $_name = [
        'offset'       => 'Offset',
        'relationType' => 'RelationType',
        'size'         => 'Size',
        'vertexId'     => 'VertexId',
        'vertexLabel'  => 'VertexLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->vertexId) {
            $res['VertexId'] = $this->vertexId;
        }
        if (null !== $this->vertexLabel) {
            $res['VertexLabel'] = $this->vertexLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncidentVertexExtendInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['VertexId'])) {
            $model->vertexId = $map['VertexId'];
        }
        if (isset($map['VertexLabel'])) {
            $model->vertexLabel = $map['VertexLabel'];
        }

        return $model;
    }
}
