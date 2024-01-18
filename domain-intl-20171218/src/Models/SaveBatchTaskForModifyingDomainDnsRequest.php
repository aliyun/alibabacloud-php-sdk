<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

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
        'aliyunDns'        => 'AliyunDns',
        'domainName'       => 'DomainName',
        'domainNameServer' => 'DomainNameServer',
        'lang'             => 'Lang',
        'userClientIp'     => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunDns) {
            $res['AliyunDns'] = $this->aliyunDns;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameServer) {
            $res['DomainNameServer'] = $this->domainNameServer;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
