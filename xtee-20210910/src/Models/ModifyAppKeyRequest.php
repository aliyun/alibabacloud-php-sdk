<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class ModifyAppKeyRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang' => 'Lang',
        'appKey' => 'appKey',
        'memo' => 'memo',
        'regId' => 'regId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->appKey) {
            $res['appKey'] = $this->appKey;
        }

        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['appKey'])) {
            $model->appKey = $map['appKey'];
        }

        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
