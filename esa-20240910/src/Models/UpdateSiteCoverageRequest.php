<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateSiteCoverageRequest extends Model
{
    /**
     * @description The desired service location. Valid values:
     *
     *   **domestic**: the Chinese mainland
     *   **global**: global
     *   **overseas**: outside the Chinese mainland
     *
     * This parameter is required.
     * @example global
     *
     * @var string
     */
    public $coverage;

    /**
     * @description The website ID. You can call the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation to obtain the ID.
     *
     * This parameter is required.
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'coverage' => 'Coverage',
        'siteId'   => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSiteCoverageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
