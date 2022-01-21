<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\contactParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\fcParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\mnsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\openApiParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\slsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest\webhookParameters;
use AlibabaCloud\Tea\Model;

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
        'fcParameters'      => 'FcParameters',
        'mnsParameters'     => 'MnsParameters',
        'openApiParameters' => 'OpenApiParameters',
        'regionId'          => 'RegionId',
        'ruleName'          => 'RuleName',
        'slsParameters'     => 'SlsParameters',
        'webhookParameters' => 'WebhookParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactParameters) {
            $res['ContactParameters'] = [];
            if (null !== $this->contactParameters && \is_array($this->contactParameters)) {
                $n = 0;
                foreach ($this->contactParameters as $item) {
                    $res['ContactParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fcParameters) {
            $res['FcParameters'] = [];
            if (null !== $this->fcParameters && \is_array($this->fcParameters)) {
                $n = 0;
                foreach ($this->fcParameters as $item) {
                    $res['FcParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mnsParameters) {
            $res['MnsParameters'] = [];
            if (null !== $this->mnsParameters && \is_array($this->mnsParameters)) {
                $n = 0;
                foreach ($this->mnsParameters as $item) {
                    $res['MnsParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->openApiParameters) {
            $res['OpenApiParameters'] = [];
            if (null !== $this->openApiParameters && \is_array($this->openApiParameters)) {
                $n = 0;
                foreach ($this->openApiParameters as $item) {
                    $res['OpenApiParameters'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['SlsParameters'] = [];
            if (null !== $this->slsParameters && \is_array($this->slsParameters)) {
                $n = 0;
                foreach ($this->slsParameters as $item) {
                    $res['SlsParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->webhookParameters) {
            $res['WebhookParameters'] = [];
            if (null !== $this->webhookParameters && \is_array($this->webhookParameters)) {
                $n = 0;
                foreach ($this->webhookParameters as $item) {
                    $res['WebhookParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEventRuleTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactParameters'])) {
            if (!empty($map['ContactParameters'])) {
                $model->contactParameters = [];
                $n                        = 0;
                foreach ($map['ContactParameters'] as $item) {
                    $model->contactParameters[$n++] = null !== $item ? contactParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FcParameters'])) {
            if (!empty($map['FcParameters'])) {
                $model->fcParameters = [];
                $n                   = 0;
                foreach ($map['FcParameters'] as $item) {
                    $model->fcParameters[$n++] = null !== $item ? fcParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MnsParameters'])) {
            if (!empty($map['MnsParameters'])) {
                $model->mnsParameters = [];
                $n                    = 0;
                foreach ($map['MnsParameters'] as $item) {
                    $model->mnsParameters[$n++] = null !== $item ? mnsParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OpenApiParameters'])) {
            if (!empty($map['OpenApiParameters'])) {
                $model->openApiParameters = [];
                $n                        = 0;
                foreach ($map['OpenApiParameters'] as $item) {
                    $model->openApiParameters[$n++] = null !== $item ? openApiParameters::fromMap($item) : $item;
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
                $n                    = 0;
                foreach ($map['SlsParameters'] as $item) {
                    $model->slsParameters[$n++] = null !== $item ? slsParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WebhookParameters'])) {
            if (!empty($map['WebhookParameters'])) {
                $model->webhookParameters = [];
                $n                        = 0;
                foreach ($map['WebhookParameters'] as $item) {
                    $model->webhookParameters[$n++] = null !== $item ? webhookParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
