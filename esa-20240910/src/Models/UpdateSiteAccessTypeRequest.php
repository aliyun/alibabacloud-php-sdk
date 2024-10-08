<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateSiteAccessTypeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example NS
     *
     * @var string
     */
    public $accessType;

    /**
     * @description This parameter is required.
     *
     * @example 1234567890
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'accessType' => 'AccessType',
        'siteId'     => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSiteAccessTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
