<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class CreateDiagnosisRequest extends Model
{
    /**
     * @var string
     */
    public $gmtFailureTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $problemCategory;
    protected $_name = [
        'gmtFailureTime' => 'GmtFailureTime',
        'instanceId' => 'InstanceId',
        'problemCategory' => 'ProblemCategory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtFailureTime) {
            $res['GmtFailureTime'] = $this->gmtFailureTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->problemCategory) {
            $res['ProblemCategory'] = $this->problemCategory;
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
        if (isset($map['GmtFailureTime'])) {
            $model->gmtFailureTime = $map['GmtFailureTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProblemCategory'])) {
            $model->problemCategory = $map['ProblemCategory'];
        }

        return $model;
    }
}
