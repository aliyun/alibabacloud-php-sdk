<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\AppendCasesRequest\cases;

class AppendCasesRequest extends Model
{
    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var cases[]
     */
    public $cases;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'campaignId' => 'CampaignId',
        'cases' => 'Cases',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->cases)) {
            Model::validateArray($this->cases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }

        if (null !== $this->cases) {
            if (\is_array($this->cases)) {
                $res['Cases'] = [];
                $n1 = 0;
                foreach ($this->cases as $item1) {
                    $res['Cases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }

        if (isset($map['Cases'])) {
            if (!empty($map['Cases'])) {
                $model->cases = [];
                $n1 = 0;
                foreach ($map['Cases'] as $item1) {
                    $model->cases[$n1] = cases::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
