<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListPrivacyRuleResponseBody\data;

use AlibabaCloud\Dara\Model;

class pageData extends Model
{
    /**
     * @var string
     */
    public $algImpl;

    /**
     * @var string
     */
    public $algType;

    /**
     * @var bool
     */
    public $currentUser;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $privacyRuleId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'algImpl' => 'AlgImpl',
        'algType' => 'AlgType',
        'currentUser' => 'CurrentUser',
        'memberName' => 'MemberName',
        'name' => 'Name',
        'privacyRuleId' => 'PrivacyRuleId',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algImpl) {
            $res['AlgImpl'] = $this->algImpl;
        }

        if (null !== $this->algType) {
            $res['AlgType'] = $this->algType;
        }

        if (null !== $this->currentUser) {
            $res['CurrentUser'] = $this->currentUser;
        }

        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->privacyRuleId) {
            $res['PrivacyRuleId'] = $this->privacyRuleId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AlgImpl'])) {
            $model->algImpl = $map['AlgImpl'];
        }

        if (isset($map['AlgType'])) {
            $model->algType = $map['AlgType'];
        }

        if (isset($map['CurrentUser'])) {
            $model->currentUser = $map['CurrentUser'];
        }

        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PrivacyRuleId'])) {
            $model->privacyRuleId = $map['PrivacyRuleId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
