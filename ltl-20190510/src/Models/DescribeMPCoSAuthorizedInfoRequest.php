<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class DescribeMPCoSAuthorizedInfoRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

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
        'apiVersion'   => 'ApiVersion',
        'bizChainId'   => 'BizChainId',
        'memberId'     => 'MemberId',
        'phaseGroupId' => 'PhaseGroupId',
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
     * @return DescribeMPCoSAuthorizedInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
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
