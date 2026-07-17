<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;

class CreateYikeEditingProjectRequest extends Model
{
    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $materialMaps;

    /**
     * @var string
     */
    public $timeline;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'coverURL' => 'CoverURL',
        'materialMaps' => 'MaterialMaps',
        'timeline' => 'Timeline',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }

        if (null !== $this->materialMaps) {
            $res['MaterialMaps'] = $this->materialMaps;
        }

        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
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
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }

        if (isset($map['MaterialMaps'])) {
            $model->materialMaps = $map['MaterialMaps'];
        }

        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
