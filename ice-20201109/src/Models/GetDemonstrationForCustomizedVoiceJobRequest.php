<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetDemonstrationForCustomizedVoiceJobRequest extends Model
{
    /**
     * @description The demonstration scenario.
     *
     * Valid values:
     *
     *   **story**
     *   **interaction**
     *   **navigation**
     *
     * This parameter is required.
     * @example story
     *
     * @var string
     */
    public $scenario;
    protected $_name = [
        'scenario' => 'Scenario',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDemonstrationForCustomizedVoiceJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        return $model;
    }
}
