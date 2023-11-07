<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult\lineages\processDetail;
use AlibabaCloud\Tea\Model;

class lineages extends Model
{
    /**
     * @description The target.
     *
     * @example dmstest.a.id
     *
     * @var string
     */
    public $dst;

    /**
     * @description The type of the lineage. Valid values:
     *
     *   **FIELD_DEPEND_FIELD**: Fields depend on fields.
     *   **TABLE_DEPEND_TABLE**: Tables depend on tables.
     *   **FIELD_INFLU_TABLE**: Fields influence tables.
     *   **FIELD_INFLU_FIELD**: Fields influence fields.
     *   **FIELD_INFLU_TABLE**: Tables influence fields.
     *   **FIELD_JOIN_FIELD**: Fields are associated with fields.
     *
     * @example FIELD_DEPEND_FIELD
     *
     * @var string
     */
    public $lineageType;

    /**
     * @description The operation type of the SQL statement in which the data lineage is generated. For example, if the operation type is SELECT, the data lineage is generated from a SELECT statement.
     *
     * >  This field is an extended field which has no practical use.
     * @example SELECT
     *
     * @var string
     */
    public $operType;

    /**
     * @description The handling details. This parameter is returned only when LineageType is FIELD_DEPEND_FIELD.
     *
     * @var processDetail
     */
    public $processDetail;

    /**
     * @description The source.
     *
     * @example dmstest.b.id
     *
     * @var string
     */
    public $src;
    protected $_name = [
        'dst'           => 'Dst',
        'lineageType'   => 'LineageType',
        'operType'      => 'OperType',
        'processDetail' => 'ProcessDetail',
        'src'           => 'Src',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dst) {
            $res['Dst'] = $this->dst;
        }
        if (null !== $this->lineageType) {
            $res['LineageType'] = $this->lineageType;
        }
        if (null !== $this->operType) {
            $res['OperType'] = $this->operType;
        }
        if (null !== $this->processDetail) {
            $res['ProcessDetail'] = null !== $this->processDetail ? $this->processDetail->toMap() : null;
        }
        if (null !== $this->src) {
            $res['Src'] = $this->src;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lineages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dst'])) {
            $model->dst = $map['Dst'];
        }
        if (isset($map['LineageType'])) {
            $model->lineageType = $map['LineageType'];
        }
        if (isset($map['OperType'])) {
            $model->operType = $map['OperType'];
        }
        if (isset($map['ProcessDetail'])) {
            $model->processDetail = processDetail::fromMap($map['ProcessDetail']);
        }
        if (isset($map['Src'])) {
            $model->src = $map['Src'];
        }

        return $model;
    }
}
