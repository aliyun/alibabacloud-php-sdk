<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardWordRootRequest;

use AlibabaCloud\Dara\Model;

class updateCommand extends Model
{
    /**
     * @var string
     */
    public $abbreviation;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $oldName;
    protected $_name = [
        'abbreviation' => 'Abbreviation',
        'description' => 'Description',
        'fullName' => 'FullName',
        'name' => 'Name',
        'oldName' => 'OldName',
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->oldName) {
            $res['OldName'] = $this->oldName;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OldName'])) {
            $model->oldName = $map['OldName'];
        }

        return $model;
    }
}
