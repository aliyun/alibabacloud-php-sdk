<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class SharePrivacyRuleRequest extends Model
{
    /**
     * @var string
     */
    public $memberIdList;

    /**
     * @var string
     */
    public $privacyRuleId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'memberIdList' => 'MemberIdList',
        'privacyRuleId' => 'PrivacyRuleId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberIdList) {
            $res['MemberIdList'] = $this->memberIdList;
        }

        if (null !== $this->privacyRuleId) {
            $res['PrivacyRuleId'] = $this->privacyRuleId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['MemberIdList'])) {
            $model->memberIdList = $map['MemberIdList'];
        }

        if (isset($map['PrivacyRuleId'])) {
            $model->privacyRuleId = $map['PrivacyRuleId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
