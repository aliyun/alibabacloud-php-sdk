<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class OpenSensitiveFileScanRequest extends Model
{
    /**
     * @var string
     */
    public $switchOn;
    protected $_name = [
        'switchOn' => 'SwitchOn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->switchOn) {
            $res['SwitchOn'] = $this->switchOn;
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
        if (isset($map['SwitchOn'])) {
            $model->switchOn = $map['SwitchOn'];
        }

        return $model;
    }
}
