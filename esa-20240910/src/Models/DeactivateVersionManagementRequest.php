<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeactivateVersionManagementRequest extends Model
{
    /**
     * @description The website ID, which can be obtained by calling the [ListSites](~~ListSites~~) operation.
     *
     * This parameter is required.
     *
     * @example 1234567890***
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeactivateVersionManagementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
