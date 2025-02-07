<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\rateLimit;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\rateLimit\threshold\responseStatus;

class threshold extends Model
{
    /**
     * @var int
     */
    public $distinctManagedRules;
    /**
     * @var int
     */
    public $managedRulesBlocked;
    /**
     * @var int
     */
    public $request;
    /**
     * @var responseStatus
     */
    public $responseStatus;
    /**
     * @var string
     */
    public $traffic;
    protected $_name = [
        'distinctManagedRules' => 'DistinctManagedRules',
        'managedRulesBlocked'  => 'ManagedRulesBlocked',
        'request'              => 'Request',
        'responseStatus'       => 'ResponseStatus',
        'traffic'              => 'Traffic',
    ];

    public function validate()
    {
        if (null !== $this->responseStatus) {
            $this->responseStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distinctManagedRules) {
            $res['DistinctManagedRules'] = $this->distinctManagedRules;
        }

        if (null !== $this->managedRulesBlocked) {
            $res['ManagedRulesBlocked'] = $this->managedRulesBlocked;
        }

        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }

        if (null !== $this->responseStatus) {
            $res['ResponseStatus'] = null !== $this->responseStatus ? $this->responseStatus->toArray($noStream) : $this->responseStatus;
        }

        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
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
        if (isset($map['DistinctManagedRules'])) {
            $model->distinctManagedRules = $map['DistinctManagedRules'];
        }

        if (isset($map['ManagedRulesBlocked'])) {
            $model->managedRulesBlocked = $map['ManagedRulesBlocked'];
        }

        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }

        if (isset($map['ResponseStatus'])) {
            $model->responseStatus = responseStatus::fromMap($map['ResponseStatus']);
        }

        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
