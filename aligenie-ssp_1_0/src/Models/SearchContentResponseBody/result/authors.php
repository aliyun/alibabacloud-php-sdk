<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentResponseBody\result;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentResponseBody\result\authors\cover;
use AlibabaCloud\Tea\Model;

class authors extends Model
{
    /**
     * @var string[]
     */
    public $authorTypes;

    /**
     * @var cover
     */
    public $cover;

    /**
     * @var string
     */
    public $description;

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
    public $rawId;

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
        'cover'       => 'Cover',
        'description' => 'Description',
        'gender'      => 'Gender',
        'id'          => 'Id',
        'online'      => 'Online',
        'rawId'       => 'RawId',
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
        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->rawId) {
            $res['RawId'] = $this->rawId;
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
        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['RawId'])) {
            $model->rawId = $map['RawId'];
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
