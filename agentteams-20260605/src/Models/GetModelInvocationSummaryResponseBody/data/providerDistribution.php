<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetModelInvocationSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;

class providerDistribution extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var float
     */
    public $percentage;

    /**
     * @var string
     */
    public $providerName;
    protected $_name = [
        'count' => 'Count',
        'percentage' => 'Percentage',
        'providerName' => 'ProviderName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        return $model;
    }
}
