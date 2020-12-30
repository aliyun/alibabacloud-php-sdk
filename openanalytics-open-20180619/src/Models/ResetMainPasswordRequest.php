<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class ResetMainPasswordRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $useRandomPassword;

    /**
     * @var string
     */
    public $initPassword;

    /**
     * @var bool
     */
    public $enableKMS;

    /**
     * @var string
     */
    public $externalUid;

    /**
     * @var string
     */
    public $externalAliyunUid;

    /**
     * @var string
     */
    public $externalBizAliyunUid;
    protected $_name = [
        'regionId'             => 'RegionId',
        'useRandomPassword'    => 'UseRandomPassword',
        'initPassword'         => 'InitPassword',
        'enableKMS'            => 'EnableKMS',
        'externalUid'          => 'ExternalUid',
        'externalAliyunUid'    => 'ExternalAliyunUid',
        'externalBizAliyunUid' => 'ExternalBizAliyunUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->useRandomPassword) {
            $res['UseRandomPassword'] = $this->useRandomPassword;
        }
        if (null !== $this->initPassword) {
            $res['InitPassword'] = $this->initPassword;
        }
        if (null !== $this->enableKMS) {
            $res['EnableKMS'] = $this->enableKMS;
        }
        if (null !== $this->externalUid) {
            $res['ExternalUid'] = $this->externalUid;
        }
        if (null !== $this->externalAliyunUid) {
            $res['ExternalAliyunUid'] = $this->externalAliyunUid;
        }
        if (null !== $this->externalBizAliyunUid) {
            $res['ExternalBizAliyunUid'] = $this->externalBizAliyunUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetMainPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UseRandomPassword'])) {
            $model->useRandomPassword = $map['UseRandomPassword'];
        }
        if (isset($map['InitPassword'])) {
            $model->initPassword = $map['InitPassword'];
        }
        if (isset($map['EnableKMS'])) {
            $model->enableKMS = $map['EnableKMS'];
        }
        if (isset($map['ExternalUid'])) {
            $model->externalUid = $map['ExternalUid'];
        }
        if (isset($map['ExternalAliyunUid'])) {
            $model->externalAliyunUid = $map['ExternalAliyunUid'];
        }
        if (isset($map['ExternalBizAliyunUid'])) {
            $model->externalBizAliyunUid = $map['ExternalBizAliyunUid'];
        }

        return $model;
    }
}
