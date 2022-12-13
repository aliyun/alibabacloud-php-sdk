<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class QuotaConfig extends Model
{
    /**
     * @var int
     */
    public $allowedMaxPriority;

    /**
     * @var bool
     */
    public $enableDLC;

    /**
     * @var bool
     */
    public $enableDSW;

    /**
     * @var bool
     */
    public $enableTideResource;

    /**
     * @var string
     */
    public $resourceLevel;
    protected $_name = [
        'allowedMaxPriority' => 'AllowedMaxPriority',
        'enableDLC'          => 'EnableDLC',
        'enableDSW'          => 'EnableDSW',
        'enableTideResource' => 'EnableTideResource',
        'resourceLevel'      => 'ResourceLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedMaxPriority) {
            $res['AllowedMaxPriority'] = $this->allowedMaxPriority;
        }
        if (null !== $this->enableDLC) {
            $res['EnableDLC'] = $this->enableDLC;
        }
        if (null !== $this->enableDSW) {
            $res['EnableDSW'] = $this->enableDSW;
        }
        if (null !== $this->enableTideResource) {
            $res['EnableTideResource'] = $this->enableTideResource;
        }
        if (null !== $this->resourceLevel) {
            $res['ResourceLevel'] = $this->resourceLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuotaConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedMaxPriority'])) {
            $model->allowedMaxPriority = $map['AllowedMaxPriority'];
        }
        if (isset($map['EnableDLC'])) {
            $model->enableDLC = $map['EnableDLC'];
        }
        if (isset($map['EnableDSW'])) {
            $model->enableDSW = $map['EnableDSW'];
        }
        if (isset($map['EnableTideResource'])) {
            $model->enableTideResource = $map['EnableTideResource'];
        }
        if (isset($map['ResourceLevel'])) {
            $model->resourceLevel = $map['ResourceLevel'];
        }

        return $model;
    }
}
