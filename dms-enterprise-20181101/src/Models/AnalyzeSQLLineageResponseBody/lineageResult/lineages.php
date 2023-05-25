<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult\lineages\processDetail;
use AlibabaCloud\Tea\Model;

class lineages extends Model
{
    /**
     * @example dmstest.a.id
     *
     * @var string
     */
    public $dst;

    /**
     * @example FIELD_DEPEND_FIELD
     *
     * @var string
     */
    public $lineageType;

    /**
     * @example SELECT
     *
     * @var string
     */
    public $operType;

    /**
     * @var processDetail
     */
    public $processDetail;

    /**
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
