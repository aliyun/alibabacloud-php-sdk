<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetBackupAutoConfigStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $canConfigAuto;
    protected $_name = [
        'canConfigAuto' => 'CanConfigAuto',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canConfigAuto) {
            $res['CanConfigAuto'] = $this->canConfigAuto;
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
        if (isset($map['CanConfigAuto'])) {
            $model->canConfigAuto = $map['CanConfigAuto'];
        }

        return $model;
    }
}
