<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteSiteFunctionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 33793140540****,33793140540****
     *
     * @var string
     */
    public $configIds;

    /**
     * @description This parameter is required.
     *
     * @example 611133661****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'configIds' => 'ConfigIds',
        'siteId'    => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configIds) {
            $res['ConfigIds'] = $this->configIds;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSiteFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigIds'])) {
            $model->configIds = $map['ConfigIds'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
