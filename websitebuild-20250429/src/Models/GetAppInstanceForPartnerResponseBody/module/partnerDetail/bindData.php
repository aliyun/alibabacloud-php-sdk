<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForPartnerResponseBody\module\partnerDetail;

use AlibabaCloud\Dara\Model;

class bindData extends Model
{
    /**
     * @var string
     */
    public $aliyunPk;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $grantAliyunPk;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $parentPk;

    /**
     * @var string
     */
    public $partnerId;

    /**
     * @var string
     */
    public $userDisplayName;
    protected $_name = [
        'aliyunPk' => 'AliyunPk',
        'bizId' => 'BizId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'grantAliyunPk' => 'GrantAliyunPk',
        'mobile' => 'Mobile',
        'parentPk' => 'ParentPk',
        'partnerId' => 'PartnerId',
        'userDisplayName' => 'UserDisplayName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['AliyunPk'] = $this->aliyunPk;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->grantAliyunPk) {
            $res['GrantAliyunPk'] = $this->grantAliyunPk;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->parentPk) {
            $res['ParentPk'] = $this->parentPk;
        }

        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }

        if (null !== $this->userDisplayName) {
            $res['UserDisplayName'] = $this->userDisplayName;
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
        if (isset($map['AliyunPk'])) {
            $model->aliyunPk = $map['AliyunPk'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GrantAliyunPk'])) {
            $model->grantAliyunPk = $map['GrantAliyunPk'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['ParentPk'])) {
            $model->parentPk = $map['ParentPk'];
        }

        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }

        if (isset($map['UserDisplayName'])) {
            $model->userDisplayName = $map['UserDisplayName'];
        }

        return $model;
    }
}
