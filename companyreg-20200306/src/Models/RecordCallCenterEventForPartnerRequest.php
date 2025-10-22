<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class RecordCallCenterEventForPartnerRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $callAction;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $connId;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $relatedId;

    /**
     * @var string
     */
    public $secretMobile;

    /**
     * @var int
     */
    public $skillType;
    protected $_name = [
        'bizId' => 'BizId',
        'bizType' => 'BizType',
        'callAction' => 'CallAction',
        'callee' => 'Callee',
        'caller' => 'Caller',
        'connId' => 'ConnId',
        'contactId' => 'ContactId',
        'jobId' => 'JobId',
        'relatedId' => 'RelatedId',
        'secretMobile' => 'SecretMobile',
        'skillType' => 'SkillType',
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

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->callAction) {
            $res['CallAction'] = $this->callAction;
        }

        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->connId) {
            $res['ConnId'] = $this->connId;
        }

        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->relatedId) {
            $res['RelatedId'] = $this->relatedId;
        }

        if (null !== $this->secretMobile) {
            $res['SecretMobile'] = $this->secretMobile;
        }

        if (null !== $this->skillType) {
            $res['SkillType'] = $this->skillType;
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

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['CallAction'])) {
            $model->callAction = $map['CallAction'];
        }

        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['ConnId'])) {
            $model->connId = $map['ConnId'];
        }

        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['RelatedId'])) {
            $model->relatedId = $map['RelatedId'];
        }

        if (isset($map['SecretMobile'])) {
            $model->secretMobile = $map['SecretMobile'];
        }

        if (isset($map['SkillType'])) {
            $model->skillType = $map['SkillType'];
        }

        return $model;
    }
}
