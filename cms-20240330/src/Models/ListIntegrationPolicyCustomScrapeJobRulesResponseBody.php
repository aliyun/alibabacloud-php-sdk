<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCustomScrapeJobRulesResponseBody\customScrapeJobRules;

class ListIntegrationPolicyCustomScrapeJobRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var customScrapeJobRules[]
     */
    public $customScrapeJobRules;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId' => 'clusterId',
        'customScrapeJobRules' => 'customScrapeJobRules',
        'policyId' => 'policyId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->customScrapeJobRules)) {
            Model::validateArray($this->customScrapeJobRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->customScrapeJobRules) {
            if (\is_array($this->customScrapeJobRules)) {
                $res['customScrapeJobRules'] = [];
                $n1 = 0;
                foreach ($this->customScrapeJobRules as $item1) {
                    $res['customScrapeJobRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['customScrapeJobRules'])) {
            if (!empty($map['customScrapeJobRules'])) {
                $model->customScrapeJobRules = [];
                $n1 = 0;
                foreach ($map['customScrapeJobRules'] as $item1) {
                    $model->customScrapeJobRules[$n1] = customScrapeJobRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
