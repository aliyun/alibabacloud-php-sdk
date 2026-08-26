<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class GetCustomResourceStatsRequest extends Model
{
    /**
     * @var string
     */
    public $mainBizType;
    protected $_name = [
        'mainBizType' => 'MainBizType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mainBizType) {
            $res['MainBizType'] = $this->mainBizType;
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
        if (isset($map['MainBizType'])) {
            $model->mainBizType = $map['MainBizType'];
        }

        return $model;
    }
}
