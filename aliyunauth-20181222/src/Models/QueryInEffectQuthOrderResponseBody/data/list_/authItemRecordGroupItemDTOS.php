<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryInEffectQuthOrderResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class authItemRecordGroupItemDTOS extends Model
{
    /**
     * @var string
     */
    public $authitemID;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remarkDataJson;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $vid;
    protected $_name = [
        'authitemID' => 'AuthitemID',
        'gmtCreated' => 'GmtCreated',
        'msg' => 'Msg',
        'name' => 'Name',
        'remarkDataJson' => 'RemarkDataJson',
        'status' => 'Status',
        'vid' => 'Vid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authitemID) {
            $res['AuthitemID'] = $this->authitemID;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->remarkDataJson) {
            $res['RemarkDataJson'] = $this->remarkDataJson;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vid) {
            $res['Vid'] = $this->vid;
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
        if (isset($map['AuthitemID'])) {
            $model->authitemID = $map['AuthitemID'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RemarkDataJson'])) {
            $model->remarkDataJson = $map['RemarkDataJson'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Vid'])) {
            $model->vid = $map['Vid'];
        }

        return $model;
    }
}
