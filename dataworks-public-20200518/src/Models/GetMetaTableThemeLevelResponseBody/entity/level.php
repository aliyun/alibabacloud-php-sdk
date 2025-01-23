<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponseBody\entity;

use AlibabaCloud\Dara\Model;

class level extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $levelId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'levelId'     => 'LevelId',
        'name'        => 'Name',
        'type'        => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->levelId) {
            $res['LevelId'] = $this->levelId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LevelId'])) {
            $model->levelId = $map['LevelId'];
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
