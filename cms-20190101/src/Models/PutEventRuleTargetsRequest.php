<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\contactParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\fcParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\mnsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\openApiParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\slsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\webhookParameters;

class PutEventRuleTargetsRequest extends Model
{
    /**
     * @var contactParameters[]
     */
    public $contactParameters;

    /**
     * @var fcParameters[]
     */
    public $fcParameters;

    /**
     * @var mnsParameters[]
     */
    public $mnsParameters;

    /**
     * @var openApiParameters[]
     */
    public $openApiParameters;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var slsParameters[]
     */
    public $slsParameters;

    /**
     * @var webhookParameters[]
     */
    public $webhookParameters;
    protected $_name = [
        'contactParameters' => 'ContactParameters',
        'fcParameters' => 'FcParameters',
        'mnsParameters' => 'MnsParameters',
        'openApiParameters' => 'OpenApiParameters',
        'regionId' => 'RegionId',
        'ruleName' => 'RuleName',
        'slsParameters' => 'SlsParameters',
        'webhookParameters' => 'WebhookParameters',
    ];

    public function validate()
    {
        if (\is_array($this->contactParameters)) {
            Model::validateArray($this->contactParameters);
        }
        if (\is_array($this->fcParameters)) {
            Model::validateArray($this->fcParameters);
        }
        if (\is_array($this->mnsParameters)) {
            Model::validateArray($this->mnsParameters);
        }
        if (\is_array($this->openApiParameters)) {
            Model::validateArray($this->openApiParameters);
        }
        if (\is_array($this->slsParameters)) {
            Model::validateArray($this->slsParameters);
        }
        if (\is_array($this->webhookParameters)) {
            Model::validateArray($this->webhookParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactParameters) {
            if (\is_array($this->contactParameters)) {
                $res['ContactParameters'] = [];
                $n1 = 0;
                foreach ($this->contactParameters as $item1) {
                    $res['ContactParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fcParameters) {
            if (\is_array($this->fcParameters)) {
                $res['FcParameters'] = [];
                $n1 = 0;
                foreach ($this->fcParameters as $item1) {
                    $res['FcParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mnsParameters) {
            if (\is_array($this->mnsParameters)) {
                $res['MnsParameters'] = [];
                $n1 = 0;
                foreach ($this->mnsParameters as $item1) {
                    $res['MnsParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->openApiParameters) {
            if (\is_array($this->openApiParameters)) {
                $res['OpenApiParameters'] = [];
                $n1 = 0;
                foreach ($this->openApiParameters as $item1) {
                    $res['OpenApiParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->slsParameters) {
            if (\is_array($this->slsParameters)) {
                $res['SlsParameters'] = [];
                $n1 = 0;
                foreach ($this->slsParameters as $item1) {
                    $res['SlsParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->webhookParameters) {
            if (\is_array($this->webhookParameters)) {
                $res['WebhookParameters'] = [];
                $n1 = 0;
                foreach ($this->webhookParameters as $item1) {
                    $res['WebhookParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ContactParameters'])) {
            if (!empty($map['ContactParameters'])) {
                $model->contactParameters = [];
                $n1 = 0;
                foreach ($map['ContactParameters'] as $item1) {
                    $model->contactParameters[$n1] = contactParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FcParameters'])) {
            if (!empty($map['FcParameters'])) {
                $model->fcParameters = [];
                $n1 = 0;
                foreach ($map['FcParameters'] as $item1) {
                    $model->fcParameters[$n1] = fcParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MnsParameters'])) {
            if (!empty($map['MnsParameters'])) {
                $model->mnsParameters = [];
                $n1 = 0;
                foreach ($map['MnsParameters'] as $item1) {
                    $model->mnsParameters[$n1] = mnsParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OpenApiParameters'])) {
            if (!empty($map['OpenApiParameters'])) {
                $model->openApiParameters = [];
                $n1 = 0;
                foreach ($map['OpenApiParameters'] as $item1) {
                    $model->openApiParameters[$n1] = openApiParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SlsParameters'])) {
            if (!empty($map['SlsParameters'])) {
                $model->slsParameters = [];
                $n1 = 0;
                foreach ($map['SlsParameters'] as $item1) {
                    $model->slsParameters[$n1] = slsParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WebhookParameters'])) {
            if (!empty($map['WebhookParameters'])) {
                $model->webhookParameters = [];
                $n1 = 0;
                foreach ($map['WebhookParameters'] as $item1) {
                    $model->webhookParameters[$n1] = webhookParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
