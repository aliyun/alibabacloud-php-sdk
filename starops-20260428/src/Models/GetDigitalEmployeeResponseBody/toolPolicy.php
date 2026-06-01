<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\GetDigitalEmployeeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetDigitalEmployeeResponseBody\toolPolicy\aliyun;

class toolPolicy extends Model
{
    /**
     * @var aliyun
     */
    public $aliyun;
    protected $_name = [
        'aliyun' => 'aliyun',
    ];

    public function validate()
    {
        if (null !== $this->aliyun) {
            $this->aliyun->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyun) {
            $res['aliyun'] = null !== $this->aliyun ? $this->aliyun->toArray($noStream) : $this->aliyun;
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
        if (isset($map['aliyun'])) {
            $model->aliyun = aliyun::fromMap($map['aliyun']);
        }

        return $model;
    }
}
