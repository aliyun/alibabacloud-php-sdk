<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class SettledCreateCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $application;

    /**
     * @var string
     */
    public $developerName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $enterpriseName;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'accountId' => 'accountId',
        'application' => 'application',
        'developerName' => 'developerName',
        'email' => 'email',
        'enterpriseName' => 'enterpriseName',
        'phone' => 'phone',
        'usage' => 'usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->application) {
            $res['application'] = $this->application;
        }

        if (null !== $this->developerName) {
            $res['developerName'] = $this->developerName;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->enterpriseName) {
            $res['enterpriseName'] = $this->enterpriseName;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['application'])) {
            $model->application = $map['application'];
        }

        if (isset($map['developerName'])) {
            $model->developerName = $map['developerName'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['enterpriseName'])) {
            $model->enterpriseName = $map['enterpriseName'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
