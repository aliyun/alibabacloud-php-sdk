<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\QueryQwenConferenceSgTicketSearchPopResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $extFields;

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var int
     */
    public $submitId;

    /**
     * @var string
     */
    public $ticketToken;
    protected $_name = [
        'companyName' => 'CompanyName',
        'extFields' => 'ExtFields',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'submitId' => 'SubmitId',
        'ticketToken' => 'TicketToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->extFields) {
            $res['ExtFields'] = $this->extFields;
        }

        if (null !== $this->firstName) {
            $res['FirstName'] = $this->firstName;
        }

        if (null !== $this->lastName) {
            $res['LastName'] = $this->lastName;
        }

        if (null !== $this->submitId) {
            $res['SubmitId'] = $this->submitId;
        }

        if (null !== $this->ticketToken) {
            $res['TicketToken'] = $this->ticketToken;
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
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['ExtFields'])) {
            $model->extFields = $map['ExtFields'];
        }

        if (isset($map['FirstName'])) {
            $model->firstName = $map['FirstName'];
        }

        if (isset($map['LastName'])) {
            $model->lastName = $map['LastName'];
        }

        if (isset($map['SubmitId'])) {
            $model->submitId = $map['SubmitId'];
        }

        if (isset($map['TicketToken'])) {
            $model->ticketToken = $map['TicketToken'];
        }

        return $model;
    }
}
