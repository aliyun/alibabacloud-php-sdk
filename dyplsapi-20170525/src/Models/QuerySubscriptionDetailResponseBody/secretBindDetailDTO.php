<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubscriptionDetailResponseBody;

use AlibabaCloud\Tea\Model;

class secretBindDetailDTO extends Model
{
    /**
     * @description The ID of the ASR model.
     *
     * @example 123456
     *
     * @var string
     */
    public $ASRModelId;

    /**
     * @description Indicates whether automatic speech recognition (ASR) is enabled. Valid values:
     *
     *   **false**: ASR is disabled.
     *   **true**: ASR is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $ASRStatus;

    /**
     * @description The status of one-way call restrictions. No value is returned for this parameter if one-way call restrictions are not set. Valid values:
     *
     *   **CONTROL_AX_DISABLE**: Phone number A cannot be used to call phone number X.
     *   **CONTROL_BX_DISABLE**: Phone number B cannot be used to call phone number X.
     *
     * @example CONTROL_BX_DISABLE
     *
     * @var string
     */
    public $callRestrict;

    /**
     * @description The expiration time of the binding.
     *
     * @example 2019-09-05 12:00:00
     *
     * @var string
     */
    public $expireDate;

    /**
     * @description The extension in the AXG extension binding.
     *
     * @example 130
     *
     * @var string
     */
    public $extension;

    /**
     * @description The creation time of the binding.
     *
     * @example 2019-03-05 12:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The ID of number group G in the binding.
     *
     * @example 2000000130001
     *
     * @var int
     */
    public $groupId;

    /**
     * @description Indicates whether all calls made by the bound phone numbers are recorded. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example true
     *
     * @var bool
     */
    public $needRecord;

    /**
     * @description Phone number A in the binding.
     *
     * @example 13900001111
     *
     * @var string
     */
    public $phoneNoA;

    /**
     * @description Phone number B in the binding.
     *
     * @example 13900002222
     *
     * @var string
     */
    public $phoneNoB;

    /**
     * @description The private number in the binding, that is, phone number X.
     *
     * @example 13900001234
     *
     * @var string
     */
    public $phoneNoX;

    /**
     * @description The binding status. Valid values:
     *
     *   **0**: The binding expired.
     *   **1**: The binding is in effect.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The binding ID.
     *
     * @example 100000076879****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return secretBindDetailDTO
     */
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
