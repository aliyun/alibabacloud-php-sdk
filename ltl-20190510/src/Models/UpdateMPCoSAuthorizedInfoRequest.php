<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class UpdateMPCoSAuthorizedInfoRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example ["196487512811****","196487512812****"]
     *
     * @var mixed[]
     */
    public $authorizedPhaseList;

    /**
     * @example 489973087549****
     *
     * @var string
     */
    public $bizChainId;

    /**
     * @example 717534457003****
     *
     * @var string
     */
    public $memberId;

    /**
     * @example 383860792287****
     *
     * @var string
     */
    public $phaseGroupId;
    protected $_name = [
        'apiVersion'          => 'ApiVersion',
        'authorizedPhaseList' => 'AuthorizedPhaseList',
        'bizChainId'          => 'BizChainId',
        'memberId'            => 'MemberId',
        'phaseGroupId'        => 'PhaseGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->authorizedPhaseList) {
            $res['AuthorizedPhaseList'] = $this->authorizedPhaseList;
        }
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->phaseGroupId) {
            $res['PhaseGroupId'] = $this->phaseGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMPCoSAuthorizedInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['AuthorizedPhaseList'])) {
            $model->authorizedPhaseList = $map['AuthorizedPhaseList'];
        }
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['PhaseGroupId'])) {
            $model->phaseGroupId = $map['PhaseGroupId'];
        }

        return $model;
    }
}
