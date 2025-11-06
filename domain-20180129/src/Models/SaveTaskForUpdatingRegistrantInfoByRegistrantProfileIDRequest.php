<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDRequest extends Model
{
    /**
     * @var string[]
     */
    public $domainName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var bool
     */
    public $transferOutProhibited;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName' => 'DomainName',
        'lang' => 'Lang',
        'registrantProfileId' => 'RegistrantProfileId',
        'transferOutProhibited' => 'TransferOutProhibited',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->domainName)) {
            Model::validateArray($this->domainName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            if (\is_array($this->domainName)) {
                $res['DomainName'] = [];
                $n1 = 0;
                foreach ($this->domainName as $item1) {
                    $res['DomainName'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            if (!empty($map['DomainName'])) {
                $model->domainName = [];
                $n1 = 0;
                foreach ($map['DomainName'] as $item1) {
                    $model->domainName[$n1] = $item1;
                    ++$n1;
                }
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
