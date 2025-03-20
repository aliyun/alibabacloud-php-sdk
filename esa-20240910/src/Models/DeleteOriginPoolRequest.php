<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteOriginPoolRequest extends Model
{
    /**
     * @description The ID of the origin address pool, which can be obtained by calling the [ListOriginPools](https://help.aliyun.com/document_detail/2863947.html) API.
     *
     * This parameter is required.
     *
     * @example 103852052519****
     *
     * @var int
     */
    public $id;

    /**
     * @description The site ID, which can be obtained by calling the [ListSites](~~ListSites~~) API.
     *
     * This parameter is required.
     *
     * @example 21655860979****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'id' => 'Id',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

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
     * @return DeleteOriginPoolRequest
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
