<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\ReceivedMsg;

use AlibabaCloud\Dara\Model;

class msgContent extends Model
{
    /**
     * @var mixed[]
     */
    public $msgData;
    protected $_name = [
        'msgData' => 'msg_data',
    ];

    public function validate()
    {
        if (\is_array($this->msgData)) {
            Model::validateArray($this->msgData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->msgData) {
            if (\is_array($this->msgData)) {
                $res['msg_data'] = [];
                foreach ($this->msgData as $key1 => $value1) {
                    $res['msg_data'][$key1] = $value1;
                }
            }
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
        if (isset($map['msg_data'])) {
            if (!empty($map['msg_data'])) {
                $model->msgData = [];
                foreach ($map['msg_data'] as $key1 => $value1) {
                    $model->msgData[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
