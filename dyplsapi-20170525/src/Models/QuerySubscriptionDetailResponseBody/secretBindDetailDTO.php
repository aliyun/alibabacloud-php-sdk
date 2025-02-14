<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubscriptionDetailResponseBody;

use AlibabaCloud\Dara\Model;

class secretBindDetailDTO extends Model
{
    /**
     * @var string
     */
    public $ASRModelId;
    /**
     * @var bool
     */
    public $ASRStatus;
    /**
     * @var string
     */
    public $callRestrict;
    /**
     * @var string
     */
    public $expireDate;
    /**
     * @var string
     */
    public $extension;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var int
     */
    public $groupId;
    /**
     * @var bool
     */
    public $needRecord;
    /**
     * @var string
     */
    public $phoneNoA;
    /**
     * @var string
     */
    public $phoneNoB;
    /**
     * @var string
     */
    public $phoneNoX;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $subsId;
    protected $_name = [
        'ASRModelId'   => 'ASRModelId',
        'ASRStatus'    => 'ASRStatus',
        'callRestrict' => 'CallRestrict',
        'expireDate'   => 'ExpireDate',
        'extension'    => 'Extension',
        'gmtCreate'    => 'GmtCreate',
        'groupId'      => 'GroupId',
        'needRecord'   => 'NeedRecord',
        'phoneNoA'     => 'PhoneNoA',
        'phoneNoB'     => 'PhoneNoB',
        'phoneNoX'     => 'PhoneNoX',
        'status'       => 'Status',
        'subsId'       => 'SubsId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ASRModelId) {
            $res['ASRModelId'] = $this->ASRModelId;
        }

        if (null !== $this->ASRStatus) {
            $res['ASRStatus'] = $this->ASRStatus;
        }

        if (null !== $this->callRestrict) {
            $res['CallRestrict'] = $this->callRestrict;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->needRecord) {
            $res['NeedRecord'] = $this->needRecord;
        }

        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }

        if (null !== $this->phoneNoB) {
            $res['PhoneNoB'] = $this->phoneNoB;
        }

        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subsId) {
            $res['SubsId'] = $this->subsId;
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
        if (isset($map['ASRModelId'])) {
            $model->ASRModelId = $map['ASRModelId'];
        }

        if (isset($map['ASRStatus'])) {
            $model->ASRStatus = $map['ASRStatus'];
        }

        if (isset($map['CallRestrict'])) {
            $model->callRestrict = $map['CallRestrict'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['NeedRecord'])) {
            $model->needRecord = $map['NeedRecord'];
        }

        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }

        if (isset($map['PhoneNoB'])) {
            $model->phoneNoB = $map['PhoneNoB'];
        }

        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubsId'])) {
            $model->subsId = $map['SubsId'];
        }

        return $model;
    }
}
