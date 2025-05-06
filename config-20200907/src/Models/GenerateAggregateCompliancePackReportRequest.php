<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class GenerateAggregateCompliancePackReportRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $compliancePackId;

    /**
     * @var bool
     */
    public $multiFiles;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'clientToken' => 'ClientToken',
        'compliancePackId' => 'CompliancePackId',
        'multiFiles' => 'MultiFiles',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }

        if (null !== $this->multiFiles) {
            $res['MultiFiles'] = $this->multiFiles;
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
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }

        if (isset($map['MultiFiles'])) {
            $model->multiFiles = $map['MultiFiles'];
        }

        return $model;
    }
}
