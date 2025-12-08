<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobConfig\outputGroups\groupConfig\manifestExtend;

use AlibabaCloud\Dara\Model;

class excludes extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'language' => 'Language',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
