<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class BucUser extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $empId;

    /**
     * @var string
     */
    public $empType;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $personalPhotoUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'account' => 'account',
        'empId' => 'empId',
        'empType' => 'empType',
        'enterpriseId' => 'enterpriseId',
        'name' => 'name',
        'nickName' => 'nickName',
        'personalPhotoUrl' => 'personalPhotoUrl',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['account'] = $this->account;
        }

        if (null !== $this->empId) {
            $res['empId'] = $this->empId;
        }

        if (null !== $this->empType) {
            $res['empType'] = $this->empType;
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
        }

        if (null !== $this->personalPhotoUrl) {
            $res['personalPhotoUrl'] = $this->personalPhotoUrl;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['account'])) {
            $model->account = $map['account'];
        }

        if (isset($map['empId'])) {
            $model->empId = $map['empId'];
        }

        if (isset($map['empType'])) {
            $model->empType = $map['empType'];
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }

        if (isset($map['personalPhotoUrl'])) {
            $model->personalPhotoUrl = $map['personalPhotoUrl'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
