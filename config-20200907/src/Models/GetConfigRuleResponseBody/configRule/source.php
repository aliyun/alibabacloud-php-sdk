<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\source\sourceDetails;
use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description The identifier of the evaluation rule.
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
     * @description The method that is used to create the rule. Valid values:
     *
     *   CUSTOM_FC: a custom rule.
     *   ALIYUN: a managed rule.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $owner;

    /**
     * @description The interval at which the rule is triggered. Valid values:
     *
     *   One_Hour: 1 hour
     *   Three_Hours: 3 hours
     *   Six_Hours: 6 hours
     *   Twelve_Hours: 12 hours
     *   TwentyFour_Hours: 24 hours
     *
     * > This parameter is returned if the rule is periodically triggered.
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
