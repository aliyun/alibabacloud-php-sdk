<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Models\AddImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dataId;
    protected $_name = [
        'dataId' => 'DataId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        return $model;
    }
}
