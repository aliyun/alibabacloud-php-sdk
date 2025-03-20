<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateOriginProtectionRequest extends Model
{
    /**
     * @description The IP convergence status.
     *
     *   on
     *   off
     *
     * This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $originConverge;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'originConverge' => 'OriginConverge',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->originConverge) {
            $res['OriginConverge'] = $this->originConverge;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOriginProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginConverge'])) {
            $model->originConverge = $map['OriginConverge'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
