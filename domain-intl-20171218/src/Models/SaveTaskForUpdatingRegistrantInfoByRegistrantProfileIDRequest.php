<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest extends Model
{
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
     * @description This parameter is required.
     *
     * @var bool
     */
    public $transferOutProhibited;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
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
     * @return SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
