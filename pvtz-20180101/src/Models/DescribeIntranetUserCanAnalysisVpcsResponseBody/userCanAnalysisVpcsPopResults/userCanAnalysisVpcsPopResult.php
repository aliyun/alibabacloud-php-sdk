<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeIntranetUserCanAnalysisVpcsResponseBody\userCanAnalysisVpcsPopResults;

use AlibabaCloud\Dara\Model;

class userCanAnalysisVpcsPopResult extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var int
     */
    public $authorizedUserId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $treeLevel;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'authType' => 'AuthType',
        'authorizedUserId' => 'AuthorizedUserId',
        'networkType' => 'NetworkType',
        'regionId' => 'RegionId',
        'treeLevel' => 'TreeLevel',
        'vpcId' => 'VpcId',
        'vpcType' => 'VpcType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->treeLevel) {
            $res['TreeLevel'] = $this->treeLevel;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
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
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TreeLevel'])) {
            $model->treeLevel = $map['TreeLevel'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcType'])) {
            $model->vpcType = $map['VpcType'];
        }

        return $model;
    }
}
