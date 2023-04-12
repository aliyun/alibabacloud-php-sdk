<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\source\sourceDetails;
use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description The identifier of the rule.
     *
     *   If the rule was created based on a managed rule, the value of this parameter is the name of the managed rule.
     *   If the rule is a custom rule, the value of this parameter is the Alibaba Cloud Resource Name (ARN) of the relevant function in Function Compute.
     *
     * @example acs:fc:cn-hangzhou:100931896542****:services/ConfigService.LATEST/functions/specific-config
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The way in which the rule was created. Valid values:
     *
     *   CUSTOM_FC: The rule is a custom rule.
     *   ALIYUN: The rule was created based on a managed rule of Alibaba Cloud.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $owner;

    /**
     * @description The details of the source of the rule.
     *
     * @var sourceDetails[]
     */
    public $sourceDetails;
    protected $_name = [
        'identifier'    => 'Identifier',
        'owner'         => 'Owner',
        'sourceDetails' => 'SourceDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->sourceDetails) {
            $res['SourceDetails'] = [];
            if (null !== $this->sourceDetails && \is_array($this->sourceDetails)) {
                $n = 0;
                foreach ($this->sourceDetails as $item) {
                    $res['SourceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['SourceDetails'])) {
            if (!empty($map['SourceDetails'])) {
                $model->sourceDetails = [];
                $n                    = 0;
                foreach ($map['SourceDetails'] as $item) {
                    $model->sourceDetails[$n++] = null !== $item ? sourceDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
