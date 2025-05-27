<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabsResponseBody;

use AlibabaCloud\Dara\Model;

class labs extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var string
     */
    public $subTitle;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'duration' => 'Duration',
        'id' => 'Id',
        'introduction' => 'Introduction',
        'subTitle' => 'SubTitle',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }

        if (null !== $this->subTitle) {
            $res['SubTitle'] = $this->subTitle;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }

        if (isset($map['SubTitle'])) {
            $model->subTitle = $map['SubTitle'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
