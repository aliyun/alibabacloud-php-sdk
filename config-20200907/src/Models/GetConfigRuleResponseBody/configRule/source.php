<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\source\sourceDetails;
use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @var sourceDetails[]
     */
    public $sourceDetails;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $identifier;
    protected $_name = [
        'sourceDetails' => 'SourceDetails',
        'owner'         => 'Owner',
        'identifier'    => 'Identifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceDetails) {
            $res['SourceDetails'] = [];
            if (null !== $this->sourceDetails && \is_array($this->sourceDetails)) {
                $n = 0;
                foreach ($this->sourceDetails as $item) {
                    $res['SourceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
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
        if (isset($map['SourceDetails'])) {
            if (!empty($map['SourceDetails'])) {
                $model->sourceDetails = [];
                $n                    = 0;
                foreach ($map['SourceDetails'] as $item) {
                    $model->sourceDetails[$n++] = null !== $item ? sourceDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        return $model;
    }
}
