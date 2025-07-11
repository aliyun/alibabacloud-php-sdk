<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreatePoolRequest;

use AlibabaCloud\Tea\Model;

class resourceLimits extends Model
{
    /**
     * @example 2000
     *
     * @var int
     */
    public $maxExectorNum;
    protected $_name = [
        'maxExectorNum' => 'MaxExectorNum',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxExectorNum) {
            $res['MaxExectorNum'] = $this->maxExectorNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceLimits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxExectorNum'])) {
            $model->maxExectorNum = $map['MaxExectorNum'];
        }

        return $model;
    }
}
