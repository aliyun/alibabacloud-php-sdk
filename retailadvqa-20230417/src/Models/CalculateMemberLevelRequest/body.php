<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\CalculateMemberLevelRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentGrade;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $currentGradeName;

    /**
     * @description This parameter is required.
     *
     * @example 4000006009418358
     *
     * @var string
     */
    public $memberId;

    /**
     * @description This parameter is required.
     *
     * @example 1230094
     *
     * @var string
     */
    public $openMerchantId;

    /**
     * @description This parameter is required.
     *
     * @example TAOBAO
     *
     * @var string
     */
    public $platformType;

    /**
     * @example 0
     *
     * @var string
     */
    public $score;

    /**
     * @description This parameter is required.
     *
     * @example 0235b7f20a11de9e2bf4c3494b6d998d
     *
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'currentGrade'     => 'CurrentGrade',
        'currentGradeName' => 'CurrentGradeName',
        'memberId'         => 'MemberId',
        'openMerchantId'   => 'OpenMerchantId',
        'platformType'     => 'PlatformType',
        'score'            => 'Score',
        'serialNo'         => 'SerialNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentGrade) {
            $res['CurrentGrade'] = $this->currentGrade;
        }
        if (null !== $this->currentGradeName) {
            $res['CurrentGradeName'] = $this->currentGradeName;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentGrade'])) {
            $model->currentGrade = $map['CurrentGrade'];
        }
        if (isset($map['CurrentGradeName'])) {
            $model->currentGradeName = $map['CurrentGradeName'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}
