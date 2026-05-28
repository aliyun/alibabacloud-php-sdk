<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class ScanFileInputConfig extends Model
{
    /**
     * @var string
     */
    public $autoCrop;

    /**
     * @var string
     */
    public $autoRotate;
    protected $_name = [
        'autoCrop' => 'autoCrop',
        'autoRotate' => 'autoRotate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCrop) {
            $res['autoCrop'] = $this->autoCrop;
        }

        if (null !== $this->autoRotate) {
            $res['autoRotate'] = $this->autoRotate;
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
        if (isset($map['autoCrop'])) {
            $model->autoCrop = $map['autoCrop'];
        }

        if (isset($map['autoRotate'])) {
            $model->autoRotate = $map['autoRotate'];
        }

        return $model;
    }
}
