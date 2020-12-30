<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveBatchTaskForModifyingDomainDnsRequest extends Model
{
    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lang;

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
    protected $_name = [
        'userClientIp'     => 'UserClientIp',
        'lang'             => 'Lang',
        'aliyunDns'        => 'AliyunDns',
        'domainName'       => 'DomainName',
        'domainNameServer' => 'DomainNameServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->aliyunDns) {
            $res['AliyunDns'] = $this->aliyunDns;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameServer) {
            $res['DomainNameServer'] = $this->domainNameServer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBatchTaskForModifyingDomainDnsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['AliyunDns'])) {
            $model->aliyunDns = $map['AliyunDns'];
        }
        if (isset($map['DomainName'])) {
            if (!empty($map['DomainName'])) {
                $model->domainName = $map['DomainName'];
            }
        }
        if (isset($map['DomainNameServer'])) {
            if (!empty($map['DomainNameServer'])) {
                $model->domainNameServer = $map['DomainNameServer'];
            }
        }

        return $model;
    }
}
