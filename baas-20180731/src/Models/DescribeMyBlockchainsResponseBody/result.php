<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeMyBlockchainsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var int
     */
    public $createtime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $rejectReason;

    /**
     * @var string
     */
    public $reqAddr;

    /**
     * @var string
     */
    public $signedAddr;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $updatetime;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'bizid'        => 'Bizid',
        'createtime'   => 'Createtime',
        'id'           => 'Id',
        'rejectReason' => 'RejectReason',
        'reqAddr'      => 'ReqAddr',
        'signedAddr'   => 'SignedAddr',
        'status'       => 'Status',
        'updatetime'   => 'Updatetime',
        'username'     => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->createtime) {
            $res['Createtime'] = $this->createtime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->rejectReason) {
            $res['RejectReason'] = $this->rejectReason;
        }
        if (null !== $this->reqAddr) {
            $res['ReqAddr'] = $this->reqAddr;
        }
        if (null !== $this->signedAddr) {
            $res['SignedAddr'] = $this->signedAddr;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updatetime) {
            $res['Updatetime'] = $this->updatetime;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['Createtime'])) {
            $model->createtime = $map['Createtime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RejectReason'])) {
            $model->rejectReason = $map['RejectReason'];
        }
        if (isset($map['ReqAddr'])) {
            $model->reqAddr = $map['ReqAddr'];
        }
        if (isset($map['SignedAddr'])) {
            $model->signedAddr = $map['SignedAddr'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Updatetime'])) {
            $model->updatetime = $map['Updatetime'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
