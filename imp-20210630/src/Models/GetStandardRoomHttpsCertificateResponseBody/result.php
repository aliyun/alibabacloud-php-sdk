<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetStandardRoomHttpsCertificateResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 证书名称
     *
     * @var string
     */
    public $certificateName;

    /**
     * @description 使用证书的确切域名
     *
     * @var string
     */
    public $domainName;

    /**
     * @description 证书创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 证书过期时间
     *
     * @var string
     */
    public $expireTime;
    protected $_name = [
        'certificateName' => 'CertificateName',
        'domainName'      => 'DomainName',
        'createTime'      => 'CreateTime',
        'expireTime'      => 'ExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        return $model;
    }
}
