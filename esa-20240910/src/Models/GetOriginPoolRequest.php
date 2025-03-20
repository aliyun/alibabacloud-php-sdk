<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetOriginPoolRequest extends Model
{
    /**
     * @description The ID of the origin pool, which can be obtained by calling the [ListOriginPools](https://help.aliyun.com/document_detail/2863947.html) interface.
     *
     * This parameter is required.
     *
     * @example 1038520525196928
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the site, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) interface.
     *
     * This parameter is required.
     *
     * @example 216558609793952
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
     * @return GetOriginPoolRequest
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
