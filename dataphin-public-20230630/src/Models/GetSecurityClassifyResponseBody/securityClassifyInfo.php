<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSecurityClassifyResponseBody;

use AlibabaCloud\Dara\Model;

class securityClassifyInfo extends Model
{
    /**
     * @var string
     */
    public $abbreviation;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $levelAbbreviation;

    /**
     * @var int
     */
    public $levelIndex;

    /**
     * @var string
     */
    public $levelName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'abbreviation' => 'Abbreviation',
        'id' => 'Id',
        'levelAbbreviation' => 'LevelAbbreviation',
        'levelIndex' => 'LevelIndex',
        'levelName' => 'LevelName',
        'name' => 'Name',
        'path' => 'Path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abbreviation) {
            $res['Abbreviation'] = $this->abbreviation;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->levelAbbreviation) {
            $res['LevelAbbreviation'] = $this->levelAbbreviation;
        }

        if (null !== $this->levelIndex) {
            $res['LevelIndex'] = $this->levelIndex;
        }

        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['Abbreviation'])) {
            $model->abbreviation = $map['Abbreviation'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LevelAbbreviation'])) {
            $model->levelAbbreviation = $map['LevelAbbreviation'];
        }

        if (isset($map['LevelIndex'])) {
            $model->levelIndex = $map['LevelIndex'];
        }

        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
