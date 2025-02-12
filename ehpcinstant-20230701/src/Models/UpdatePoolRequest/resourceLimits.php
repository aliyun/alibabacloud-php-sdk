<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UpdatePoolRequest;

use AlibabaCloud\Dara\Model;

class resourceLimits extends Model
{
    /**
     * @var int
     */
    public $maxExectorNum;
    protected $_name = [
        'maxExectorNum' => 'MaxExectorNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxExectorNum) {
            $res['MaxExectorNum'] = $this->maxExectorNum;
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
        if (isset($map['MaxExectorNum'])) {
            $model->maxExectorNum = $map['MaxExectorNum'];
        }

        return $model;
    }
}
