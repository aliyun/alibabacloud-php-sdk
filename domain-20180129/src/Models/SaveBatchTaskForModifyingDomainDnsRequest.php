<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class SaveBatchTaskForModifyingDomainDnsRequest extends Model
{
    /**
     * @var bool
     */
    public $aliyunDns;

    /**
     * @var string[]
     */
    public $domainName;

    /**
     * @var string[]
     */
    public $domainNameServer;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'aliyunDns' => 'AliyunDns',
        'domainName' => 'DomainName',
        'domainNameServer' => 'DomainNameServer',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->domainName)) {
            Model::validateArray($this->domainName);
        }
        if (\is_array($this->domainNameServer)) {
            Model::validateArray($this->domainNameServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunDns) {
            $res['AliyunDns'] = $this->aliyunDns;
        }

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

        if (null !== $this->domainNameServer) {
            if (\is_array($this->domainNameServer)) {
                $res['DomainNameServer'] = [];
                $n1 = 0;
                foreach ($this->domainNameServer as $item1) {
                    $res['DomainNameServer'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['AliyunDns'])) {
            $model->aliyunDns = $map['AliyunDns'];
        }

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

        if (isset($map['DomainNameServer'])) {
            if (!empty($map['DomainNameServer'])) {
                $model->domainNameServer = [];
                $n1 = 0;
                foreach ($map['DomainNameServer'] as $item1) {
                    $model->domainNameServer[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
