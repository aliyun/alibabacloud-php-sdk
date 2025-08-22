<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\osUpdate;

use AlibabaCloud\Dara\Model;

class packages extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $kb;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'description' => 'Description',
        'kb' => 'Kb',
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

        if (null !== $this->kb) {
            $res['Kb'] = $this->kb;
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

        if (isset($map['Kb'])) {
            $model->kb = $map['Kb'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
