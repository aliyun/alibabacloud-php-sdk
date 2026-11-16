<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertificatesResponseBody;

use AlibabaCloud\Dara\Model;

class certificates extends Model
{
    /**
     * @var int
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $isUsing;

    /**
     * @var string[]
     */
    public $sans;
    protected $_name = [
        'certificateId' => 'CertificateId',
        'certificateName' => 'CertificateName',
        'commonName' => 'CommonName',
        'endTime' => 'EndTime',
        'isUsing' => 'IsUsing',
        'sans' => 'Sans',
    ];

    public function validate()
    {
        if (\is_array($this->sans)) {
            Model::validateArray($this->sans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->isUsing) {
            $res['IsUsing'] = $this->isUsing;
        }

        if (null !== $this->sans) {
            if (\is_array($this->sans)) {
                $res['Sans'] = [];
                $n1 = 0;
                foreach ($this->sans as $item1) {
                    $res['Sans'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IsUsing'])) {
            $model->isUsing = $map['IsUsing'];
        }

        if (isset($map['Sans'])) {
            if (!empty($map['Sans'])) {
                $model->sans = [];
                $n1 = 0;
                foreach ($map['Sans'] as $item1) {
                    $model->sans[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
