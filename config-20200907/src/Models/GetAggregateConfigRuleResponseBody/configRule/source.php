<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\source\sourceDetails;

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
        if (\is_array($this->sourceDetails)) {
            Model::validateArray($this->sourceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->sourceDetails) {
            if (\is_array($this->sourceDetails)) {
                $res['SourceDetails'] = [];
                $n1                   = 0;
                foreach ($this->sourceDetails as $item1) {
                    $res['SourceDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['SourceDetails'])) {
            if (!empty($map['SourceDetails'])) {
                $model->sourceDetails = [];
                $n1                   = 0;
                foreach ($map['SourceDetails'] as $item1) {
                    $model->sourceDetails[$n1++] = sourceDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
