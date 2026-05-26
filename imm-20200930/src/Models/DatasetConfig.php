<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DatasetConfig extends Model
{
    /**
     * @var InsightsConfig
     */
    public $insights;

    /**
     * @var SmartClusterConfig
     */
    public $smartCluster;
    protected $_name = [
        'insights' => 'Insights',
        'smartCluster' => 'SmartCluster',
    ];

    public function validate()
    {
        if (null !== $this->insights) {
            $this->insights->validate();
        }
        if (null !== $this->smartCluster) {
            $this->smartCluster->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insights) {
            $res['Insights'] = null !== $this->insights ? $this->insights->toArray($noStream) : $this->insights;
        }

        if (null !== $this->smartCluster) {
            $res['SmartCluster'] = null !== $this->smartCluster ? $this->smartCluster->toArray($noStream) : $this->smartCluster;
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
        if (isset($map['Insights'])) {
            $model->insights = InsightsConfig::fromMap($map['Insights']);
        }

        if (isset($map['SmartCluster'])) {
            $model->smartCluster = SmartClusterConfig::fromMap($map['SmartCluster']);
        }

        return $model;
    }
}
