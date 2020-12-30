<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubscriptionDetailResponseBody;

use AlibabaCloud\Tea\Model;

class secretBindDetailDTO extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $phoneNoB;

    /**
     * @var bool
     */
    public $ASRStatus;

    /**
     * @var bool
     */
    public $needRecord;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $subsId;

    /**
     * @var string
     */
    public $callRestrict;

    /**
     * @var string
     */
    public $phoneNoX;

    /**
     * @var string
     */
    public $ASRModelId;

    /**
     * @var string
     */
    public $phoneNoA;
    protected $_name = [
        'status'       => 'Status',
        'extension'    => 'Extension',
        'groupId'      => 'GroupId',
        'phoneNoB'     => 'PhoneNoB',
        'ASRStatus'    => 'ASRStatus',
        'needRecord'   => 'NeedRecord',
        'gmtCreate'    => 'GmtCreate',
        'expireDate'   => 'ExpireDate',
        'subsId'       => 'SubsId',
        'callRestrict' => 'CallRestrict',
        'phoneNoX'     => 'PhoneNoX',
        'ASRModelId'   => 'ASRModelId',
        'phoneNoA'     => 'PhoneNoA',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->phoneNoB) {
            $res['PhoneNoB'] = $this->phoneNoB;
        }
        if (null !== $this->ASRStatus) {
            $res['ASRStatus'] = $this->ASRStatus;
        }
        if (null !== $this->needRecord) {
            $res['NeedRecord'] = $this->needRecord;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->subsId) {
            $res['SubsId'] = $this->subsId;
        }
        if (null !== $this->callRestrict) {
            $res['CallRestrict'] = $this->callRestrict;
        }
        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }
        if (null !== $this->ASRModelId) {
            $res['ASRModelId'] = $this->ASRModelId;
        }
        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretBindDetailDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PhoneNoB'])) {
            $model->phoneNoB = $map['PhoneNoB'];
        }
        if (isset($map['ASRStatus'])) {
            $model->ASRStatus = $map['ASRStatus'];
        }
        if (isset($map['NeedRecord'])) {
            $model->needRecord = $map['NeedRecord'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['SubsId'])) {
            $model->subsId = $map['SubsId'];
        }
        if (isset($map['CallRestrict'])) {
            $model->callRestrict = $map['CallRestrict'];
        }
        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }
        if (isset($map['ASRModelId'])) {
            $model->ASRModelId = $map['ASRModelId'];
        }
        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }

        return $model;
    }
}
