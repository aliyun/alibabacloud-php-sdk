<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class GetTaskStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $statType;
    protected $_name = [
        'statType' => 'StatType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statType) {
            $res['StatType'] = $this->statType;
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
        if (isset($map['StatType'])) {
            $model->statType = $map['StatType'];
        }

        return $model;
    }
}
