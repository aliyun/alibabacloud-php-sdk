<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class Settled extends Model
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
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

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
        'gmtCreate' => 'gmtCreate',
        'id' => 'id',
        'phone' => 'phone',
        'requestId' => 'requestId',
        'status' => 'status',
        'type' => 'type',
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

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
