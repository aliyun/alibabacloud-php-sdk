<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class DescribeCACertificateListRequest extends Model
{
    /**
     * @var string
     */
    public $caStatus;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $issuerType;

    /**
     * @var int
     */
    public $showSize;

    /**
     * @var string
     */
    public $validStatus;
    protected $_name = [
        'caStatus' => 'CaStatus',
        'certType' => 'CertType',
        'currentPage' => 'CurrentPage',
        'identifier' => 'Identifier',
        'issuerType' => 'IssuerType',
        'showSize' => 'ShowSize',
        'validStatus' => 'ValidStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caStatus) {
            $res['CaStatus'] = $this->caStatus;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        if (null !== $this->issuerType) {
            $res['IssuerType'] = $this->issuerType;
        }

        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }

        if (null !== $this->validStatus) {
            $res['ValidStatus'] = $this->validStatus;
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
        if (isset($map['CaStatus'])) {
            $model->caStatus = $map['CaStatus'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        if (isset($map['IssuerType'])) {
            $model->issuerType = $map['IssuerType'];
        }

        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        if (isset($map['ValidStatus'])) {
            $model->validStatus = $map['ValidStatus'];
        }

        return $model;
    }
}
