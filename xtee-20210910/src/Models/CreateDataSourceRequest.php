<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class CreateDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'lang' => 'Lang',
        'description' => 'description',
        'name' => 'name',
        'ossKey' => 'ossKey',
        'regId' => 'regId',
        'type' => 'type',
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

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ossKey) {
            $res['ossKey'] = $this->ossKey;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ossKey'])) {
            $model->ossKey = $map['ossKey'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
