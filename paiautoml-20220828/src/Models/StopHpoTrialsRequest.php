<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class StopHpoTrialsRequest extends Model
{
    /**
     * @var string[]
     */
    public $trialIds;
    protected $_name = [
        'trialIds' => 'TrialIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trialIds) {
            $res['TrialIds'] = $this->trialIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopHpoTrialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrialIds'])) {
            if (!empty($map['TrialIds'])) {
                $model->trialIds = $map['TrialIds'];
            }
        }

        return $model;
    }
}
