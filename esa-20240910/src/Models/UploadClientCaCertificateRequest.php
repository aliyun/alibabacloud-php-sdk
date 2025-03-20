<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UploadClientCaCertificateRequest extends Model
{
    /**
     * @description The certificate content.
     *
     * This parameter is required.
     *
     * @example -----BEGIN CERTIFICATE-----
     *
     * @var string
     */
    public $certificate;

    /**
     * @description The certificate name.
     *
     * @example yourCertName
     *
     * @var string
     */
    public $name;

    /**
     * @description The website ID.
     *
     * This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'certificate' => 'Certificate',
        'name' => 'Name',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadClientCaCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
