<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListListenerCertificatesResponseBody;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @description 证书Id
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description 证书类型
     *
     * @var string
     */
    public $certificateType;

    /**
     * @description 是否为默认证书
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description 证书状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'certificateId'   => 'CertificateId',
        'certificateType' => 'CertificateType',
        'isDefault'       => 'IsDefault',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
