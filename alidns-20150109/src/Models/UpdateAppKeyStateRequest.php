<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class UpdateAppKeyStateRequest extends Model
{
    /**
     * @var string
     */
    public $appKeyId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'appKeyId' => 'AppKeyId',
        'lang' => 'Lang',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKeyId) {
            $res['AppKeyId'] = $this->appKeyId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AppKeyId'])) {
            $model->appKeyId = $map['AppKeyId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
