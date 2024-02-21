<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\keyPairNameList;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\securityGroupList;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\vpcInfoList;
use AlibabaCloud\Tea\Model;

class ListEmrAvailableConfigResponseBody extends Model
{
    /**
     * @var emrMainVersionList
     */
    public $emrMainVersionList;

    /**
     * @var keyPairNameList
     */
    public $keyPairNameList;

    /**
     * @example BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22
     *
     * @var string
     */
    public $requestId;

    /**
     * @var securityGroupList
     */
    public $securityGroupList;

    /**
     * @var vpcInfoList
     */
    public $vpcInfoList;
    protected $_name = [
        'emrMainVersionList' => 'EmrMainVersionList',
        'keyPairNameList'    => 'KeyPairNameList',
        'requestId'          => 'RequestId',
        'securityGroupList'  => 'SecurityGroupList',
        'vpcInfoList'        => 'VpcInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrMainVersionList) {
            $res['EmrMainVersionList'] = null !== $this->emrMainVersionList ? $this->emrMainVersionList->toMap() : null;
        }
        if (null !== $this->keyPairNameList) {
            $res['KeyPairNameList'] = null !== $this->keyPairNameList ? $this->keyPairNameList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroupList) {
            $res['SecurityGroupList'] = null !== $this->securityGroupList ? $this->securityGroupList->toMap() : null;
        }
        if (null !== $this->vpcInfoList) {
            $res['VpcInfoList'] = null !== $this->vpcInfoList ? $this->vpcInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEmrAvailableConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrMainVersionList'])) {
            $model->emrMainVersionList = emrMainVersionList::fromMap($map['EmrMainVersionList']);
        }
        if (isset($map['KeyPairNameList'])) {
            $model->keyPairNameList = keyPairNameList::fromMap($map['KeyPairNameList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupList'])) {
            $model->securityGroupList = securityGroupList::fromMap($map['SecurityGroupList']);
        }
        if (isset($map['VpcInfoList'])) {
            $model->vpcInfoList = vpcInfoList::fromMap($map['VpcInfoList']);
        }

        return $model;
    }
}
