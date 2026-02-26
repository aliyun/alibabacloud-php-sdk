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
    protected $_name = [
        'insights' => 'Insights',
    ];

    public function validate()
    {
        if (null !== $this->insights) {
            $this->insights->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insights) {
            $res['Insights'] = null !== $this->insights ? $this->insights->toArray($noStream) : $this->insights;
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

        return $model;
    }
}
