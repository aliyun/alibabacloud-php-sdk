<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetContentResponseBody\result;

use AlibabaCloud\Tea\Model;

class authors extends Model
{
    /**
     * @var string[]
     */
    public $authorTypes;

    /**
     * @example MALE
     *
     * @var string
     */
    public $gender;

    /**
     * @example 123123
     *
     * @var int
     */
    public $id;

    /**
     * @example false
     *
     * @var bool
     */
    public $online;

    /**
     * @example qingting
     *
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'authorTypes' => 'AuthorTypes',
        'gender'      => 'Gender',
        'id'          => 'Id',
        'online'      => 'Online',
        'source'      => 'Source',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorTypes) {
            $res['AuthorTypes'] = $this->authorTypes;
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

    /**
     * @param array $map
     *
     * @return authors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorTypes'])) {
            if (!empty($map['AuthorTypes'])) {
                $model->authorTypes = $map['AuthorTypes'];
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
