<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class QueryInfoFromMdpRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $mobileMd5;

    /**
     * @var string
     */
    public $mobileSha256;

    /**
     * @var string
     */
    public $mobileSm3;

    /**
     * @var string
     */
    public $riskScene;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'mobile' => 'Mobile',
        'mobileMd5' => 'MobileMd5',
        'mobileSha256' => 'MobileSha256',
        'mobileSm3' => 'MobileSm3',
        'riskScene' => 'RiskScene',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->mobileMd5) {
            $res['MobileMd5'] = $this->mobileMd5;
        }

        if (null !== $this->mobileSha256) {
            $res['MobileSha256'] = $this->mobileSha256;
        }

        if (null !== $this->mobileSm3) {
            $res['MobileSm3'] = $this->mobileSm3;
        }

        if (null !== $this->riskScene) {
            $res['RiskScene'] = $this->riskScene;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['MobileMd5'])) {
            $model->mobileMd5 = $map['MobileMd5'];
        }

        if (isset($map['MobileSha256'])) {
            $model->mobileSha256 = $map['MobileSha256'];
        }

        if (isset($map['MobileSm3'])) {
            $model->mobileSm3 = $map['MobileSm3'];
        }

        if (isset($map['RiskScene'])) {
            $model->riskScene = $map['RiskScene'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
