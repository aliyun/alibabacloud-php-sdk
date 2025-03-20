<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateSitePauseRequest extends Model
{
    /**
     * @description Specifies whether to temporarily pause ESA on the website. If you set this parameter to true, all requests to the domains in your DNS records go directly to your origin server. Valid values:
     *
     *   true
     *   false
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $paused;

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
        'paused' => 'Paused',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->paused) {
            $res['Paused'] = $this->paused;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSitePauseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Paused'])) {
            $model->paused = $map['Paused'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
