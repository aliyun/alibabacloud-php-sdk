<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchResponseBody\data\solutionList\solutionAttribute;

use AlibabaCloud\Dara\Model;

class issueTimeInfo extends Model
{
    /**
     * @var int
     */
    public $issueTicketType;

    /**
     * @var int
     */
    public $issueTimeLimit;
    protected $_name = [
        'issueTicketType' => 'issue_ticket_type',
        'issueTimeLimit' => 'issue_time_limit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->issueTicketType) {
            $res['issue_ticket_type'] = $this->issueTicketType;
        }

        if (null !== $this->issueTimeLimit) {
            $res['issue_time_limit'] = $this->issueTimeLimit;
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
        if (isset($map['issue_ticket_type'])) {
            $model->issueTicketType = $map['issue_ticket_type'];
        }

        if (isset($map['issue_time_limit'])) {
            $model->issueTimeLimit = $map['issue_time_limit'];
        }

        return $model;
    }
}
