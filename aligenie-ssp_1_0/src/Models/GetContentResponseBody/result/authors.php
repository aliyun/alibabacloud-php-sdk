<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetContentResponseBody\result;

use AlibabaCloud\Dara\Model;

class authors extends Model
{
    /**
     * @var string[]
     */
    public $authorTypes;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'authorTypes' => 'AuthorTypes',
        'gender' => 'Gender',
        'id' => 'Id',
        'online' => 'Online',
        'source' => 'Source',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->authorTypes)) {
            Model::validateArray($this->authorTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorTypes) {
            if (\is_array($this->authorTypes)) {
                $res['AuthorTypes'] = [];
                $n1 = 0;
                foreach ($this->authorTypes as $item1) {
                    $res['AuthorTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['AuthorTypes'])) {
            if (!empty($map['AuthorTypes'])) {
                $model->authorTypes = [];
                $n1 = 0;
                foreach ($map['AuthorTypes'] as $item1) {
                    $model->authorTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
