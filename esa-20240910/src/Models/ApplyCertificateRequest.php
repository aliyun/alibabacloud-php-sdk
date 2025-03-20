<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ApplyCertificateRequest extends Model
{
    /**
     * @description List of domains, separated by commas.
     *
     * This parameter is required.
     *
     * @example www.example.com,blog.example.com
     *
     * @var string
     */
    public $domains;

    /**
     * @description Site ID.
     *
     * This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The certificate type. Valid values: lets_encrypt, digicert_single, and digicert_wildcard.
     *
     * @example lets_encrypt
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domains' => 'Domains',
        'siteId' => 'SiteId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            $model->domains = $map['Domains'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
