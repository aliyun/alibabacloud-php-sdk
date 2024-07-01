<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class SaveBatchTaskForUpdatingContactInfoRequest extends Model
{
    /**
     * @var bool
     */
    public $addTransferLock;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $contactType;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $domainName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'addTransferLock'     => 'AddTransferLock',
        'contactType'         => 'ContactType',
        'domainName'          => 'DomainName',
        'lang'                => 'Lang',
        'registrantProfileId' => 'RegistrantProfileId',
        'userClientIp'        => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTransferLock) {
            $res['AddTransferLock'] = $this->addTransferLock;
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
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBatchTaskForUpdatingContactInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTransferLock'])) {
            $model->addTransferLock = $map['AddTransferLock'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['DomainName'])) {
            if (!empty($map['DomainName'])) {
                $model->domainName = $map['DomainName'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
