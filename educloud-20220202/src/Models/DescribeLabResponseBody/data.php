<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeLabResponseBody;

use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeLabResponseBody\data\chapter;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var chapter[]
     */
    public $chapter;

    /**
     * @var string
     */
    public $introduce;

    /**
     * @var string
     */
    public $labId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'category'  => 'Category',
        'chapter'   => 'Chapter',
        'introduce' => 'Introduce',
        'labId'     => 'LabId',
        'tag'       => 'Tag',
        'time'      => 'Time',
        'title'     => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->chapter) {
            $res['Chapter'] = [];
            if (null !== $this->chapter && \is_array($this->chapter)) {
                $n = 0;
                foreach ($this->chapter as $item) {
                    $res['Chapter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->introduce) {
            $res['Introduce'] = $this->introduce;
        }
        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Chapter'])) {
            if (!empty($map['Chapter'])) {
                $model->chapter = [];
                $n              = 0;
                foreach ($map['Chapter'] as $item) {
                    $model->chapter[$n++] = null !== $item ? chapter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Introduce'])) {
            $model->introduce = $map['Introduce'];
        }
        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
