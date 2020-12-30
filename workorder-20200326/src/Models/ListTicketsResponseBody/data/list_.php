<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models\ListTicketsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $ticketStatus;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var int
     */
    public $addTime;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'ticketStatus' => 'TicketStatus',
        'title'        => 'Title',
        'creatorId'    => 'CreatorId',
        'addTime'      => 'AddTime',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ticketStatus) {
            $res['TicketStatus'] = $this->ticketStatus;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TicketStatus'])) {
            $model->ticketStatus = $map['TicketStatus'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
