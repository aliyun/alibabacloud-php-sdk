<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckResponseBody\data;

use AlibabaCloud\Dara\Model;

class ruleDetailUrlList extends Model
{
    /**
     * @var string
     */
    public $sceneEnum;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'sceneEnum' => 'SceneEnum',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneEnum) {
            $res['SceneEnum'] = $this->sceneEnum;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['SceneEnum'])) {
            $model->sceneEnum = $map['SceneEnum'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
