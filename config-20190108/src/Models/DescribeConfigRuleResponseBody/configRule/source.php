<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponseBody\configRule;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponseBody\configRule\source\sourceConditions;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponseBody\configRule\source\sourceDetails;
use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var sourceConditions[]
     */
    public $sourceConditions;

    /**
     * @var sourceDetails[]
     */
    public $sourceDetails;
    protected $_name = [
        'identifier'       => 'Identifier',
        'owner'            => 'Owner',
        'sourceConditions' => 'SourceConditions',
        'sourceDetails'    => 'SourceDetails',
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
        if (null !== $this->sourceConditions) {
            $res['SourceConditions'] = [];
            if (null !== $this->sourceConditions && \is_array($this->sourceConditions)) {
                $n = 0;
                foreach ($this->sourceConditions as $item) {
                    $res['SourceConditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['SourceConditions'])) {
            if (!empty($map['SourceConditions'])) {
                $model->sourceConditions = [];
                $n                       = 0;
                foreach ($map['SourceConditions'] as $item) {
                    $model->sourceConditions[$n++] = null !== $item ? sourceConditions::fromMap($item) : $item;
                }
            }
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
