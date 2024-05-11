<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models\CheckLayerResponseBody;

use AlibabaCloud\Tea\Model;

class checkResults extends Model
{
    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $experimentName;

    /**
     * @var string
     */
    public $paramName;
    protected $_name = [
        'experimentId'   => 'ExperimentId',
        'experimentName' => 'ExperimentName',
        'paramName'      => 'ParamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->experimentName) {
            $res['ExperimentName'] = $this->experimentName;
        }
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['ExperimentName'])) {
            $model->experimentName = $map['ExperimentName'];
        }
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        return $model;
    }
}
