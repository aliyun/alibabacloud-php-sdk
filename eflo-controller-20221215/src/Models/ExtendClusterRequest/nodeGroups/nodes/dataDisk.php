<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups\nodes;

use AlibabaCloud\Dara\Model;

class dataDisk extends Model
{
    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $deleteWithNode;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var int
     */
    public $provisionedIops;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'burstingEnabled' => 'BurstingEnabled',
        'category' => 'Category',
        'deleteWithNode' => 'DeleteWithNode',
        'performanceLevel' => 'PerformanceLevel',
        'provisionedIops' => 'ProvisionedIops',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->deleteWithNode) {
            $res['DeleteWithNode'] = $this->deleteWithNode;
        }

        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }

        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['DeleteWithNode'])) {
            $model->deleteWithNode = $map['DeleteWithNode'];
        }

        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }

        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
