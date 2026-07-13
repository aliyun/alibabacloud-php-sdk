<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class UpdateAppSeoStatusRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $seAuthInfo;

    /**
     * @var int
     */
    public $seIndexStatus;

    /**
     * @var string
     */
    public $seType;
    protected $_name = [
        'bizId' => 'BizId',
        'domain' => 'Domain',
        'seAuthInfo' => 'SeAuthInfo',
        'seIndexStatus' => 'SeIndexStatus',
        'seType' => 'SeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->seAuthInfo) {
            $res['SeAuthInfo'] = $this->seAuthInfo;
        }

        if (null !== $this->seIndexStatus) {
            $res['SeIndexStatus'] = $this->seIndexStatus;
        }

        if (null !== $this->seType) {
            $res['SeType'] = $this->seType;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['SeAuthInfo'])) {
            $model->seAuthInfo = $map['SeAuthInfo'];
        }

        if (isset($map['SeIndexStatus'])) {
            $model->seIndexStatus = $map['SeIndexStatus'];
        }

        if (isset($map['SeType'])) {
            $model->seType = $map['SeType'];
        }

        return $model;
    }
}
