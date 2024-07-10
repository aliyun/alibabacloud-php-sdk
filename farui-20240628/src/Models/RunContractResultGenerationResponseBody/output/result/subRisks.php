<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationResponseBody\output\result;

use AlibabaCloud\Tea\Model;

class subRisks extends Model
{
    /**
     * @var string
     */
    public $originalContent;

    /**
     * @var string
     */
    public $resultContent;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $riskBrief;

    /**
     * @var string
     */
    public $riskClause;

    /**
     * @var string
     */
    public $riskExplain;
    protected $_name = [
        'originalContent' => 'originalContent',
        'resultContent'   => 'resultContent',
        'resultType'      => 'resultType',
        'riskBrief'       => 'riskBrief',
        'riskClause'      => 'riskClause',
        'riskExplain'     => 'riskExplain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalContent) {
            $res['originalContent'] = $this->originalContent;
        }
        if (null !== $this->resultContent) {
            $res['resultContent'] = $this->resultContent;
        }
        if (null !== $this->resultType) {
            $res['resultType'] = $this->resultType;
        }
        if (null !== $this->riskBrief) {
            $res['riskBrief'] = $this->riskBrief;
        }
        if (null !== $this->riskClause) {
            $res['riskClause'] = $this->riskClause;
        }
        if (null !== $this->riskExplain) {
            $res['riskExplain'] = $this->riskExplain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subRisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['originalContent'])) {
            $model->originalContent = $map['originalContent'];
        }
        if (isset($map['resultContent'])) {
            $model->resultContent = $map['resultContent'];
        }
        if (isset($map['resultType'])) {
            $model->resultType = $map['resultType'];
        }
        if (isset($map['riskBrief'])) {
            $model->riskBrief = $map['riskBrief'];
        }
        if (isset($map['riskClause'])) {
            $model->riskClause = $map['riskClause'];
        }
        if (isset($map['riskExplain'])) {
            $model->riskExplain = $map['riskExplain'];
        }

        return $model;
    }
}
