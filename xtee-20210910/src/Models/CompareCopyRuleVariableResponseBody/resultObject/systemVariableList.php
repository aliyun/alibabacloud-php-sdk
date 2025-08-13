<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\CompareCopyRuleVariableResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class systemVariableList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outType;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'outType' => 'OutType',
        'title' => 'Title',
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outType) {
            $res['OutType'] = $this->outType;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutType'])) {
            $model->outType = $map['OutType'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
