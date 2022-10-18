<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\GetTicketResponseBody;

use AlibabaCloud\SDK\Workorder\V20210610\Models\GetTicketResponseBody\data\severity;
use AlibabaCloud\SDK\Workorder\V20210610\Models\GetTicketResponseBody\data\status;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var severity
     */
    public $severity;

    /**
     * @var status
     */
    public $status;

    /**
     * @var string
     */
    public $ticketId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'categoryId'  => 'CategoryId',
        'createTime'  => 'CreateTime',
        'creatorId'   => 'CreatorId',
        'description' => 'Description',
        'severity'    => 'Severity',
        'status'      => 'Status',
        'ticketId'    => 'TicketId',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->severity) {
            $res['Severity'] = null !== $this->severity ? $this->severity->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Severity'])) {
            $model->severity = severity::fromMap($map['Severity']);
        }
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
