<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class SetAutoProtectNewAssetsRequest extends Model
{
    /**
     * @var bool
     */
    public $autoProtect;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'autoProtect' => 'AutoProtect',
        'lang' => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoProtect) {
            $res['AutoProtect'] = $this->autoProtect;
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
        if (isset($map['AutoProtect'])) {
            $model->autoProtect = $map['AutoProtect'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
