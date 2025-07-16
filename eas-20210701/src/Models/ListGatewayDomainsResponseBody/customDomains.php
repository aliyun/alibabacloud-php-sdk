<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayDomainsResponseBody;

use AlibabaCloud\Tea\Model;

class customDomains extends Model
{
    /**
     * @var string
     */
    public $certificateEndDate;

    /**
     * @description The ID of the SSL certificate bound to the domain name. Obtain the certificate ID after you upload or purchase a certificate in the [Certificate Management Service](https://yundunnext.console.aliyun.com/?spm=5176.2020520163.console-base_help.2.4b3baJixaJixOc\\&p=cas) console.
     *
     * @example 1473**25
     *
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $certificateStartDate;

    /**
     * @var string
     */
    public $certificateStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @description The custom domain name.
     *
     * @example test.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The domain name type.
     *
     * Valid value:
     *
     *   intranet: internal network.
     *   internet: public network.
     *
     * @example intranet
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'certificateEndDate' => 'CertificateEndDate',
        'certificateId' => 'CertificateId',
        'certificateName' => 'CertificateName',
        'certificateStartDate' => 'CertificateStartDate',
        'certificateStatus' => 'CertificateStatus',
        'createTime' => 'CreateTime',
        'domain' => 'Domain',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateEndDate) {
            $res['CertificateEndDate'] = $this->certificateEndDate;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->certificateStartDate) {
            $res['CertificateStartDate'] = $this->certificateStartDate;
        }
        if (null !== $this->certificateStatus) {
            $res['CertificateStatus'] = $this->certificateStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customDomains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateEndDate'])) {
            $model->certificateEndDate = $map['CertificateEndDate'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['CertificateStartDate'])) {
            $model->certificateStartDate = $map['CertificateStartDate'];
        }
        if (isset($map['CertificateStatus'])) {
            $model->certificateStatus = $map['CertificateStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
