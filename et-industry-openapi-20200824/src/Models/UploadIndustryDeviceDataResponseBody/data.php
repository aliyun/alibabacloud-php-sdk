<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\UploadIndustryDeviceDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\UploadIndustryDeviceDataResponseBody\data\message;

class data extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var message[]
     */
    public $message;
    protected $_name = [
        'count' => 'Count',
        'message' => 'Message',
    ];

    public function validate()
    {
        if (\is_array($this->message)) {
            Model::validateArray($this->message);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->message) {
            if (\is_array($this->message)) {
                $res['Message'] = [];
                $n1 = 0;
                foreach ($this->message as $item1) {
                    $res['Message'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Message'])) {
            if (!empty($map['Message'])) {
                $model->message = [];
                $n1 = 0;
                foreach ($map['Message'] as $item1) {
                    $model->message[$n1++] = message::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
