<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteCertificateResponseBody extends Model
{
    /**
     * @description The certificate ID.
     *
     * @example babaded901474b9693acf530e0fb1d95
     *
     * @var string
     */
    public $id;

    /**
     * @description The request ID.
     *
     * @example F32C57AA-7BF8-49AE-A2CC-9F42390F5A19
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The website ID.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The website name.
     *
     * @example example.com
     *
     * @var string
     */
    public $siteName;
    protected $_name = [
        'id' => 'Id',
        'requestId' => 'RequestId',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        return $model;
    }
}
