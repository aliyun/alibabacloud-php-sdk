<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetReductionProposalResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Proactive carbon reduction recommendations and advice.
     *
     * @example Reduce one-drop usage
     *
     * @var string
     */
    public $reduction;

    /**
     * @description Active carbon reduction assessment.
     *
     * @example Trying Energy Expert for a more detailed assessment.
     *
     * @var string
     */
    public $reductionEvaluation;
    protected $_name = [
        'reduction'           => 'reduction',
        'reductionEvaluation' => 'reductionEvaluation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reduction) {
            $res['reduction'] = $this->reduction;
        }
        if (null !== $this->reductionEvaluation) {
            $res['reductionEvaluation'] = $this->reductionEvaluation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['reduction'])) {
            $model->reduction = $map['reduction'];
        }
        if (isset($map['reductionEvaluation'])) {
            $model->reductionEvaluation = $map['reductionEvaluation'];
        }

        return $model;
    }
}
