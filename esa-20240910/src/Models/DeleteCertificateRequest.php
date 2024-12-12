<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteCertificateRequest extends Model
{
    /**
     * @description The certificate ID.
     *
     * This parameter is required.
     * @example babaded901474b9693acf530e0fb1d95
     *
     * @var string
     */
    public $id;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](~~ListSites~~) operation.
     *
     * This parameter is required.
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'id'     => 'Id',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
