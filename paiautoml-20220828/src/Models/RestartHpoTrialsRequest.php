<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class RestartHpoTrialsRequest extends Model
{
    /**
     * @description A hyperparameter combination instance.
     *
     * @example ‘{"${batch_size}": "32", "${lr}": "0.01"}\\"
     *
     * @var string
     */
    public $trialHyperParameters;

    /**
     * @description Trial ID array.
     *
     * @var string[]
     */
    public $trialIds;
    protected $_name = [
        'trialHyperParameters' => 'TrialHyperParameters',
        'trialIds'             => 'TrialIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trialHyperParameters) {
            $res['TrialHyperParameters'] = $this->trialHyperParameters;
        }
        if (null !== $this->trialIds) {
            $res['TrialIds'] = $this->trialIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartHpoTrialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrialHyperParameters'])) {
            $model->trialHyperParameters = $map['TrialHyperParameters'];
        }
        if (isset($map['TrialIds'])) {
            if (!empty($map['TrialIds'])) {
                $model->trialIds = $map['TrialIds'];
            }
        }

        return $model;
    }
}
