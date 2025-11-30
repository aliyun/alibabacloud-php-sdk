<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobConfig\outputGroups\outputs;

use AlibabaCloud\Dara\Model;

class hlsGroupConfig extends Model
{
    /**
     * @var string
     */
    public $audioGroup;

    /**
     * @var string
     */
    public $autoSelect;

    /**
     * @var string
     */
    public $forced;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $isDefault;

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
    public $subtitleGroup;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'audioGroup' => 'AudioGroup',
        'autoSelect' => 'AutoSelect',
        'forced' => 'Forced',
        'group' => 'Group',
        'isDefault' => 'IsDefault',
        'language' => 'Language',
        'name' => 'Name',
        'subtitleGroup' => 'SubtitleGroup',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioGroup) {
            $res['AudioGroup'] = $this->audioGroup;
        }

        if (null !== $this->autoSelect) {
            $res['AutoSelect'] = $this->autoSelect;
        }

        if (null !== $this->forced) {
            $res['Forced'] = $this->forced;
        }

        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->subtitleGroup) {
            $res['SubtitleGroup'] = $this->subtitleGroup;
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
        if (isset($map['AudioGroup'])) {
            $model->audioGroup = $map['AudioGroup'];
        }

        if (isset($map['AutoSelect'])) {
            $model->autoSelect = $map['AutoSelect'];
        }

        if (isset($map['Forced'])) {
            $model->forced = $map['Forced'];
        }

        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SubtitleGroup'])) {
            $model->subtitleGroup = $map['SubtitleGroup'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
