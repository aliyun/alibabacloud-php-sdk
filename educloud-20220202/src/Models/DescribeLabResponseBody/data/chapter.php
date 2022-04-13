<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeLabResponseBody\data;

use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeLabResponseBody\data\chapter\sections;
use AlibabaCloud\Tea\Model;

class chapter extends Model
{
    /**
     * @var int
     */
    public $orderNumber;

    /**
     * @var sections[]
     */
    public $sections;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'orderNumber' => 'OrderNumber',
        'sections'    => 'Sections',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }
        if (null !== $this->sections) {
            $res['Sections'] = [];
            if (null !== $this->sections && \is_array($this->sections)) {
                $n = 0;
                foreach ($this->sections as $item) {
                    $res['Sections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chapter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }
        if (isset($map['Sections'])) {
            if (!empty($map['Sections'])) {
                $model->sections = [];
                $n               = 0;
                foreach ($map['Sections'] as $item) {
                    $model->sections[$n++] = null !== $item ? sections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
