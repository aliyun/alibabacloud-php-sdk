<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class TransportCertificateInfo extends Model
{
    /**
     * @var string
     */
    public $algorithm;

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
    public $certificateMatchStatus;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string[]
     */
    public $coveredDomains;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string[]
     */
    public $matchedDomains;

    /**
     * @var int
     */
    public $notAfterTimestamp;

    /**
     * @var int
     */
    public $notBeforeTimestamp;

    /**
     * @var string
     */
    public $sans;
    protected $_name = [
        'algorithm' => 'algorithm',
        'certIdentifier' => 'certIdentifier',
        'certName' => 'certName',
        'certificateMatchStatus' => 'certificateMatchStatus',
        'commonName' => 'commonName',
        'coveredDomains' => 'coveredDomains',
        'issuer' => 'issuer',
        'matchedDomains' => 'matchedDomains',
        'notAfterTimestamp' => 'notAfterTimestamp',
        'notBeforeTimestamp' => 'notBeforeTimestamp',
        'sans' => 'sans',
    ];

    public function validate()
    {
        if (\is_array($this->coveredDomains)) {
            Model::validateArray($this->coveredDomains);
        }
        if (\is_array($this->matchedDomains)) {
            Model::validateArray($this->matchedDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['algorithm'] = $this->algorithm;
        }

        if (null !== $this->certIdentifier) {
            $res['certIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->certName) {
            $res['certName'] = $this->certName;
        }

        if (null !== $this->certificateMatchStatus) {
            $res['certificateMatchStatus'] = $this->certificateMatchStatus;
        }

        if (null !== $this->commonName) {
            $res['commonName'] = $this->commonName;
        }

        if (null !== $this->coveredDomains) {
            if (\is_array($this->coveredDomains)) {
                $res['coveredDomains'] = [];
                $n1 = 0;
                foreach ($this->coveredDomains as $item1) {
                    $res['coveredDomains'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->issuer) {
            $res['issuer'] = $this->issuer;
        }

        if (null !== $this->matchedDomains) {
            if (\is_array($this->matchedDomains)) {
                $res['matchedDomains'] = [];
                $n1 = 0;
                foreach ($this->matchedDomains as $item1) {
                    $res['matchedDomains'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notAfterTimestamp) {
            $res['notAfterTimestamp'] = $this->notAfterTimestamp;
        }

        if (null !== $this->notBeforeTimestamp) {
            $res['notBeforeTimestamp'] = $this->notBeforeTimestamp;
        }

        if (null !== $this->sans) {
            $res['sans'] = $this->sans;
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
        if (isset($map['algorithm'])) {
            $model->algorithm = $map['algorithm'];
        }

        if (isset($map['certIdentifier'])) {
            $model->certIdentifier = $map['certIdentifier'];
        }

        if (isset($map['certName'])) {
            $model->certName = $map['certName'];
        }

        if (isset($map['certificateMatchStatus'])) {
            $model->certificateMatchStatus = $map['certificateMatchStatus'];
        }

        if (isset($map['commonName'])) {
            $model->commonName = $map['commonName'];
        }

        if (isset($map['coveredDomains'])) {
            if (!empty($map['coveredDomains'])) {
                $model->coveredDomains = [];
                $n1 = 0;
                foreach ($map['coveredDomains'] as $item1) {
                    $model->coveredDomains[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['issuer'])) {
            $model->issuer = $map['issuer'];
        }

        if (isset($map['matchedDomains'])) {
            if (!empty($map['matchedDomains'])) {
                $model->matchedDomains = [];
                $n1 = 0;
                foreach ($map['matchedDomains'] as $item1) {
                    $model->matchedDomains[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['notAfterTimestamp'])) {
            $model->notAfterTimestamp = $map['notAfterTimestamp'];
        }

        if (isset($map['notBeforeTimestamp'])) {
            $model->notBeforeTimestamp = $map['notBeforeTimestamp'];
        }

        if (isset($map['sans'])) {
            $model->sans = $map['sans'];
        }

        return $model;
    }
}
