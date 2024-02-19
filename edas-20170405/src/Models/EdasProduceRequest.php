<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170405\Models;

use AlibabaCloud\Tea\Model;

class EdasProduceRequest extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $sourceFlag;
    protected $_name = [
        'data'       => 'data',
        'sourceFlag' => 'sourceFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->sourceFlag) {
            $res['sourceFlag'] = $this->sourceFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EdasProduceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['sourceFlag'])) {
            $model->sourceFlag = $map['sourceFlag'];
        }

        return $model;
    }
}
