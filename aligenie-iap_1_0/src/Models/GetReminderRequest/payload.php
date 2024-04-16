<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderRequest;

use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @example 20****34
     *
     * @var int
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDebug;
    protected $_name = [
        'id'      => 'Id',
        'isDebug' => 'IsDebug',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsDebug'])) {
            $model->isDebug = $map['IsDebug'];
        }

        return $model;
    }
}
