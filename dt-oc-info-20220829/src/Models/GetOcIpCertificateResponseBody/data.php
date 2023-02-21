<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpCertificateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2019-05-14
     *
     * @var string
     */
    public $authorizeDate;

    /**
     * @var string
     */
    public $authorizeDepartment;

    /**
     * @example JY11107112389646
     *
     * @var string
     */
    public $certNum;

    /**
     * @var string
     */
    public $certScope;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example “”
     *
     * @var string
     */
    public $province;

    /**
     * @example “”
     *
     * @var string
     */
    public $pubDate;

    /**
     * @example 2024-05-13
     *
     * @var string
     */
    public $validEndDate;

    /**
     * @example 2019-05-14
     *
     * @var string
     */
    public $validStartDate;
    protected $_name = [
        'authorizeDate'       => 'AuthorizeDate',
        'authorizeDepartment' => 'AuthorizeDepartment',
        'certNum'             => 'CertNum',
        'certScope'           => 'CertScope',
        'certType'            => 'CertType',
        'entName'             => 'EntName',
        'province'            => 'Province',
        'pubDate'             => 'PubDate',
        'validEndDate'        => 'ValidEndDate',
        'validStartDate'      => 'ValidStartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizeDate) {
            $res['AuthorizeDate'] = $this->authorizeDate;
        }
        if (null !== $this->authorizeDepartment) {
            $res['AuthorizeDepartment'] = $this->authorizeDepartment;
        }
        if (null !== $this->certNum) {
            $res['CertNum'] = $this->certNum;
        }
        if (null !== $this->certScope) {
            $res['CertScope'] = $this->certScope;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->pubDate) {
            $res['PubDate'] = $this->pubDate;
        }
        if (null !== $this->validEndDate) {
            $res['ValidEndDate'] = $this->validEndDate;
        }
        if (null !== $this->validStartDate) {
            $res['ValidStartDate'] = $this->validStartDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizeDate'])) {
            $model->authorizeDate = $map['AuthorizeDate'];
        }
        if (isset($map['AuthorizeDepartment'])) {
            $model->authorizeDepartment = $map['AuthorizeDepartment'];
        }
        if (isset($map['CertNum'])) {
            $model->certNum = $map['CertNum'];
        }
        if (isset($map['CertScope'])) {
            $model->certScope = $map['CertScope'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['PubDate'])) {
            $model->pubDate = $map['PubDate'];
        }
        if (isset($map['ValidEndDate'])) {
            $model->validEndDate = $map['ValidEndDate'];
        }
        if (isset($map['ValidStartDate'])) {
            $model->validStartDate = $map['ValidStartDate'];
        }

        return $model;
    }
}
