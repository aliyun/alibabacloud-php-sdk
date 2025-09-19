<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\next;

use AlibabaCloud\Dara\Model;

class certificate extends Model
{
    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $certificateStatus;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var string
     */
    public $endTime;
    protected $_name = [
        'certificateName' => 'CertificateName',
        'certificateStatus' => 'CertificateStatus',
        'certificateType' => 'CertificateType',
        'endTime' => 'EndTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }

        if (null !== $this->certificateStatus) {
            $res['CertificateStatus'] = $this->certificateStatus;
        }

        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }

        if (isset($map['CertificateStatus'])) {
            $model->certificateStatus = $map['CertificateStatus'];
        }

        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
