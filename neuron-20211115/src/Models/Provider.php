<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class Provider extends Model
{
    /**
     * @var string
     */
    public $company;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $contact;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $team;

    /**
     * @var int
     */
    public $teamId;
    protected $_name = [
        'company' => 'company',
        'companyId' => 'companyId',
        'contact' => 'contact',
        'email' => 'email',
        'team' => 'team',
        'teamId' => 'teamId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->company) {
            $res['company'] = $this->company;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->contact) {
            $res['contact'] = $this->contact;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->team) {
            $res['team'] = $this->team;
        }

        if (null !== $this->teamId) {
            $res['teamId'] = $this->teamId;
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
        if (isset($map['company'])) {
            $model->company = $map['company'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['contact'])) {
            $model->contact = $map['contact'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['team'])) {
            $model->team = $map['team'];
        }

        if (isset($map['teamId'])) {
            $model->teamId = $map['teamId'];
        }

        return $model;
    }
}
