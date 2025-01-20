<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult\lineages\processDetail;

class lineages extends Model
{
    /**
     * @var string
     */
    public $dst;
    /**
     * @var string
     */
    public $lineageType;
    /**
     * @var string
     */
    public $operType;
    /**
     * @var processDetail
     */
    public $processDetail;
    /**
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
        if (null !== $this->processDetail) {
            $this->processDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ProcessDetail'] = null !== $this->processDetail ? $this->processDetail->toArray($noStream) : $this->processDetail;
        }

        if (null !== $this->src) {
            $res['Src'] = $this->src;
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
