<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class AliyunJwtCreateCommonRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunAccountName;

    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $aliyunUidType;

    /**
     * @var string
     */
    public $parentUid;

    /**
     * @var string
     */
    public $ticket;
    protected $_name = [
        'aliyunAccountName' => 'AliyunAccountName',
        'aliyunUid'         => 'AliyunUid',
        'aliyunUidType'     => 'AliyunUidType',
        'parentUid'         => 'ParentUid',
        'ticket'            => 'Ticket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunAccountName) {
            $res['AliyunAccountName'] = $this->aliyunAccountName;
        }
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->aliyunUidType) {
            $res['AliyunUidType'] = $this->aliyunUidType;
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
        }
        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AliyunJwtCreateCommonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunAccountName'])) {
            $model->aliyunAccountName = $map['AliyunAccountName'];
        }
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['AliyunUidType'])) {
            $model->aliyunUidType = $map['AliyunUidType'];
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
        }
        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }

        return $model;
    }
}
