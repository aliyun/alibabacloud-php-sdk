<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeSampleInfoRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var int
     */
    public $versions;
    protected $_name = [
        'lang' => 'Lang',
        'id' => 'id',
        'regId' => 'regId',
        'versions' => 'versions',
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

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->versions) {
            $res['versions'] = $this->versions;
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

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['versions'])) {
            $model->versions = $map['versions'];
        }

        return $model;
    }
}
