<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;

class SaveTaskForUpdatingContactByTempateIdRequest extends Model
{
    /**
     * @var bool
     */
    public $addTransferLock;

    /**
     * @var int
     */
    public $contactTemplateId;

    /**
     * @var string
     */
    public $contactType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $saleId;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'addTransferLock' => 'AddTransferLock',
        'contactTemplateId' => 'ContactTemplateId',
        'contactType' => 'ContactType',
        'domainName' => 'DomainName',
        'lang' => 'Lang',
        'saleId' => 'SaleId',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addTransferLock) {
            $res['AddTransferLock'] = $this->addTransferLock;
        }

        if (null !== $this->contactTemplateId) {
            $res['ContactTemplateId'] = $this->contactTemplateId;
        }

        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
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
        if (isset($map['AddTransferLock'])) {
            $model->addTransferLock = $map['AddTransferLock'];
        }

        if (isset($map['ContactTemplateId'])) {
            $model->contactTemplateId = $map['ContactTemplateId'];
        }

        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
