<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class PutEvaluationsRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $deleteMode;

    /**
     * @example [{"accountId":120886317861****,"annotation":"The flow log is not enabled.","complianceResourceId":"flowlog-o6wdfo1yvgo4i8****","complianceResourceType":"ACS::CEN::Flowlog","complianceRegionId":"cn-shanghai","complianceType":"NON_COMPLIANT","orderingTimestamp":1588907220408}]
     *
     * @var string
     */
    public $evaluations;

    /**
     * @example =lAUbfkWp7GL9AFoQEIStinqBMc4FC8sHvip/1F1npkWUDNS2GEm6xwL6Zl/fSr0bbkWY+aiCLjTJxnp4H/yp/8p/Q8VCAtqG5uhRii4sfnYRnTPnE****
     *
     * @var string
     */
    public $resultToken;
    protected $_name = [
        'deleteMode'  => 'DeleteMode',
        'evaluations' => 'Evaluations',
        'resultToken' => 'ResultToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteMode) {
            $res['DeleteMode'] = $this->deleteMode;
        }
        if (null !== $this->evaluations) {
            $res['Evaluations'] = $this->evaluations;
        }
        if (null !== $this->resultToken) {
            $res['ResultToken'] = $this->resultToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEvaluationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteMode'])) {
            $model->deleteMode = $map['DeleteMode'];
        }
        if (isset($map['Evaluations'])) {
            $model->evaluations = $map['Evaluations'];
        }
        if (isset($map['ResultToken'])) {
            $model->resultToken = $map['ResultToken'];
        }

        return $model;
    }
}
