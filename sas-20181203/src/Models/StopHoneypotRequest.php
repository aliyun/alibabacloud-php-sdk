<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class StopHoneypotRequest extends Model
{
    /**
     * @var string
     */
    public $honeypotId;
    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'honeypotId' => 'HoneypotId',
        'lang'       => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
