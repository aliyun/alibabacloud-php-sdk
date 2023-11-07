<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest extends Model
{
    /**
     * @example registrant
     *
     * @var string
     */
    public $contactType;

    /**
     * @example example.com
     *
     * @var string[]
     */
    public $domainName;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var int
     */
    public $registrantProfileId;

    /**
     * @example true
     *
     * @var bool
     */
    public $transferOutProhibited;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'contactType'           => 'ContactType',
        'domainName'            => 'DomainName',
        'lang'                  => 'Lang',
        'registrantProfileId'   => 'RegistrantProfileId',
        'transferOutProhibited' => 'TransferOutProhibited',
        'userClientIp'          => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->transferOutProhibited) {
            $res['TransferOutProhibited'] = $this->transferOutProhibited;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['TransferOutProhibited'])) {
            $model->transferOutProhibited = $map['TransferOutProhibited'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
