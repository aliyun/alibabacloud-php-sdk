<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class CheckInstanceWebTerminalRequest extends Model
{
    /**
     * @var string
     */
    public $checkInfo;
    protected $_name = [
        'checkInfo' => 'CheckInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkInfo) {
            $res['CheckInfo'] = $this->checkInfo;
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
        if (isset($map['CheckInfo'])) {
            $model->checkInfo = $map['CheckInfo'];
        }

        return $model;
    }
}
