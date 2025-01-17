<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeScanTaskStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $levels;
    protected $_name = [
        'levels' => 'Levels',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
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
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }

        return $model;
    }
}
