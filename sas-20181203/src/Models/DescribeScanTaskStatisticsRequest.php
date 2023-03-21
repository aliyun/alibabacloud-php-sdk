<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScanTaskStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }

        return $model;
    }
}
