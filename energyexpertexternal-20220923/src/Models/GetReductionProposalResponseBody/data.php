<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetReductionProposalResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $reduction;
    /**
     * @var string
     */
    public $reductionEvaluation;
    protected $_name = [
        'reduction'           => 'reduction',
        'reductionEvaluation' => 'reductionEvaluation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
