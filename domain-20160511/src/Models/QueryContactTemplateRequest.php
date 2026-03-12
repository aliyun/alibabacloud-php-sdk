<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;

class QueryContactTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $CCompany;

    /**
     * @var int
     */
    public $contactTemplateId;

    /**
     * @var bool
     */
    public $defaultTemplate;

    /**
     * @var string
     */
    public $ECompany;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regType;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'auditStatus' => 'AuditStatus',
        'CCompany' => 'CCompany',
        'contactTemplateId' => 'ContactTemplateId',
        'defaultTemplate' => 'DefaultTemplate',
        'ECompany' => 'ECompany',
        'lang' => 'Lang',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'regType' => 'RegType',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->CCompany) {
            $res['CCompany'] = $this->CCompany;
        }

        if (null !== $this->contactTemplateId) {
            $res['ContactTemplateId'] = $this->contactTemplateId;
        }

        if (null !== $this->defaultTemplate) {
            $res['DefaultTemplate'] = $this->defaultTemplate;
        }

        if (null !== $this->ECompany) {
            $res['ECompany'] = $this->ECompany;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regType) {
            $res['RegType'] = $this->regType;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['CCompany'])) {
            $model->CCompany = $map['CCompany'];
        }

        if (isset($map['ContactTemplateId'])) {
            $model->contactTemplateId = $map['ContactTemplateId'];
        }

        if (isset($map['DefaultTemplate'])) {
            $model->defaultTemplate = $map['DefaultTemplate'];
        }

        if (isset($map['ECompany'])) {
            $model->ECompany = $map['ECompany'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegType'])) {
            $model->regType = $map['RegType'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
