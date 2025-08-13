<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class CreateFieldRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $classify;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $enumData;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'lang' => 'Lang',
        'classify' => 'classify',
        'description' => 'description',
        'enumData' => 'enumData',
        'name' => 'name',
        'regId' => 'regId',
        'source' => 'source',
        'title' => 'title',
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

        if (null !== $this->classify) {
            $res['classify'] = $this->classify;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enumData) {
            $res['enumData'] = $this->enumData;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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

        if (isset($map['classify'])) {
            $model->classify = $map['classify'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enumData'])) {
            $model->enumData = $map['enumData'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
