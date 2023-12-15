<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationUserCertsResponseBody\result;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @example aa
     *
     * @var string
     */
    public $certData;

    /**
     * @example aa
     *
     * @var string
     */
    public $issuer;

    /**
     * @example aa
     *
     * @var string
     */
    public $name;

    /**
     * @example aa
     *
     * @var string
     */
    public $scope;

    /**
     * @example aa
     *
     * @var string
     */
    public $subject;

    /**
     * @example aa
     *
     * @var string
     */
    public $validFrom;

    /**
     * @example aaa
     *
     * @var string
     */
    public $validTo;
    protected $_name = [
        'certData'  => 'CertData',
        'issuer'    => 'Issuer',
        'name'      => 'Name',
        'scope'     => 'Scope',
        'subject'   => 'Subject',
        'validFrom' => 'ValidFrom',
        'validTo'   => 'ValidTo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certData) {
            $res['CertData'] = $this->certData;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->validFrom) {
            $res['ValidFrom'] = $this->validFrom;
        }
        if (null !== $this->validTo) {
            $res['ValidTo'] = $this->validTo;
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
        if (isset($map['CertData'])) {
            $model->certData = $map['CertData'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['ValidFrom'])) {
            $model->validFrom = $map['ValidFrom'];
        }
        if (isset($map['ValidTo'])) {
            $model->validTo = $map['ValidTo'];
        }

        return $model;
    }
}
