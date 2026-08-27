<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListActiveAnnouncementsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $announcementId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $createdBy;

    /**
     * @var string
     */
    public $displayPage;

    /**
     * @var string
     */
    public $displayType;

    /**
     * @var string
     */
    public $effectiveEnd;

    /**
     * @var string
     */
    public $effectiveStart;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $publishedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'announcementId' => 'announcementId',
        'content' => 'content',
        'createdBy' => 'createdBy',
        'displayPage' => 'displayPage',
        'displayType' => 'displayType',
        'effectiveEnd' => 'effectiveEnd',
        'effectiveStart' => 'effectiveStart',
        'priority' => 'priority',
        'publishedAt' => 'publishedAt',
        'status' => 'status',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->announcementId) {
            $res['announcementId'] = $this->announcementId;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->displayPage) {
            $res['displayPage'] = $this->displayPage;
        }

        if (null !== $this->displayType) {
            $res['displayType'] = $this->displayType;
        }

        if (null !== $this->effectiveEnd) {
            $res['effectiveEnd'] = $this->effectiveEnd;
        }

        if (null !== $this->effectiveStart) {
            $res['effectiveStart'] = $this->effectiveStart;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->publishedAt) {
            $res['publishedAt'] = $this->publishedAt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['announcementId'])) {
            $model->announcementId = $map['announcementId'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['displayPage'])) {
            $model->displayPage = $map['displayPage'];
        }

        if (isset($map['displayType'])) {
            $model->displayType = $map['displayType'];
        }

        if (isset($map['effectiveEnd'])) {
            $model->effectiveEnd = $map['effectiveEnd'];
        }

        if (isset($map['effectiveStart'])) {
            $model->effectiveStart = $map['effectiveStart'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['publishedAt'])) {
            $model->publishedAt = $map['publishedAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
