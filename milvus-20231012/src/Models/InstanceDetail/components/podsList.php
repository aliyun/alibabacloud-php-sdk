<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\InstanceDetail\components;

use AlibabaCloud\Dara\Model;

class podsList extends Model
{
    /**
     * @var string
     */
    public $podId;

    /**
     * @var string
     */
    public $podName;
    protected $_name = [
        'podId' => 'podId',
        'podName' => 'podName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->podId) {
            $res['podId'] = $this->podId;
        }

        if (null !== $this->podName) {
            $res['podName'] = $this->podName;
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
        if (isset($map['podId'])) {
            $model->podId = $map['podId'];
        }

        if (isset($map['podName'])) {
            $model->podName = $map['podName'];
        }

        return $model;
    }
}
