<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ResourceLimitDetails extends Model
{
    /**
     * @var string
     */
    public $GCLevel;

    /**
     * @var mixed[]
     */
    public $resourceLimit;

    /**
     * @var bool
     */
    public $shouldIgnoreResourceCheck;
    protected $_name = [
        'GCLevel' => 'GCLevel',
        'resourceLimit' => 'ResourceLimit',
        'shouldIgnoreResourceCheck' => 'ShouldIgnoreResourceCheck',
    ];

    public function validate()
    {
        if (\is_array($this->resourceLimit)) {
            Model::validateArray($this->resourceLimit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->GCLevel) {
            $res['GCLevel'] = $this->GCLevel;
        }

        if (null !== $this->resourceLimit) {
            if (\is_array($this->resourceLimit)) {
                $res['ResourceLimit'] = [];
                foreach ($this->resourceLimit as $key1 => $value1) {
                    $res['ResourceLimit'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->shouldIgnoreResourceCheck) {
            $res['ShouldIgnoreResourceCheck'] = $this->shouldIgnoreResourceCheck;
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
        if (isset($map['GCLevel'])) {
            $model->GCLevel = $map['GCLevel'];
        }

        if (isset($map['ResourceLimit'])) {
            if (!empty($map['ResourceLimit'])) {
                $model->resourceLimit = [];
                foreach ($map['ResourceLimit'] as $key1 => $value1) {
                    $model->resourceLimit[$key1] = $value1;
                }
            }
        }

        if (isset($map['ShouldIgnoreResourceCheck'])) {
            $model->shouldIgnoreResourceCheck = $map['ShouldIgnoreResourceCheck'];
        }

        return $model;
    }
}
