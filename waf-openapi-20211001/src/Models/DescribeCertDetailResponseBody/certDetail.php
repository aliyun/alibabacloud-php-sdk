<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCertDetailResponseBody;

use AlibabaCloud\Dara\Model;

class certDetail extends Model
{
    /**
     * @var int
     */
    public $afterDate;

    /**
     * @var int
     */
    public $beforeDate;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $sans;
    protected $_name = [
        'afterDate' => 'AfterDate',
        'beforeDate' => 'BeforeDate',
        'certIdentifier' => 'CertIdentifier',
        'certName' => 'CertName',
        'commonName' => 'CommonName',
        'domain' => 'Domain',
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
        if (null !== $this->afterDate) {
            $res['AfterDate'] = $this->afterDate;
        }

        if (null !== $this->beforeDate) {
            $res['BeforeDate'] = $this->beforeDate;
        }

        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (isset($map['AfterDate'])) {
            $model->afterDate = $map['AfterDate'];
        }

        if (isset($map['BeforeDate'])) {
            $model->beforeDate = $map['BeforeDate'];
        }

        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
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
