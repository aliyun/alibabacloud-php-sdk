<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardWordRootResponseBody;

use AlibabaCloud\Dara\Model;

class wordRootInfo extends Model
{
    /**
     * @var string
     */
    public $abbreviation;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

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
    public $lastModifier;

    /**
     * @var string
     */
    public $lastModifierName;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'abbreviation' => 'Abbreviation',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'creatorName' => 'CreatorName',
        'description' => 'Description',
        'fullName' => 'FullName',
        'lastModifier' => 'LastModifier',
        'lastModifierName' => 'LastModifierName',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }

        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }

        if (null !== $this->lastModifierName) {
            $res['LastModifierName'] = $this->lastModifierName;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }

        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }

        if (isset($map['LastModifierName'])) {
            $model->lastModifierName = $map['LastModifierName'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
