<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeLabResponseBody\data\chapter;

use AlibabaCloud\Tea\Model;

class sections extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $orderNumber;

    /**
     * @var string
     */
    public $sectionId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'content'     => 'Content',
        'orderNumber' => 'OrderNumber',
        'sectionId'   => 'SectionId',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }
        if (null !== $this->sectionId) {
            $res['SectionId'] = $this->sectionId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }
        if (isset($map['SectionId'])) {
            $model->sectionId = $map['SectionId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
