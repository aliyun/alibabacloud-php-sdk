<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstancesResponseBody\data\instance;

use AlibabaCloud\Tea\Model;

class slaveInstId extends Model
{
    /**
     * @var string[]
     */
    public $instId;
    protected $_name = [
        'instId' => 'instId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instId) {
            $res['instId'] = $this->instId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slaveInstId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instId'])) {
            if (!empty($map['instId'])) {
                $model->instId = $map['instId'];
            }
        }

        return $model;
    }
}
