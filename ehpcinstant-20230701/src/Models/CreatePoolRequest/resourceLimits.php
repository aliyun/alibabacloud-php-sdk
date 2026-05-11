<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreatePoolRequest;

use AlibabaCloud\Dara\Model;

class resourceLimits extends Model
{
    /**
     * @var int
     */
    public $maxExecutorNum;
    protected $_name = [
        'maxExecutorNum' => 'MaxExecutorNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxExecutorNum) {
            $res['MaxExecutorNum'] = $this->maxExecutorNum;
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
        if (isset($map['MaxExecutorNum'])) {
            $model->maxExecutorNum = $map['MaxExecutorNum'];
        }

        return $model;
    }
}
