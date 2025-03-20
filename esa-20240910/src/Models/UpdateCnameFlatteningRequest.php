<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateCnameFlatteningRequest extends Model
{
    /**
     * @description Flattening mode. Possible values:
     * - flatten_all: Flatten all.
     * - flatten_at_root: Flatten only the root domain. The default is to flatten the root domain.
     *
     * This parameter is required.
     *
     * @example flatten_all
     *
     * @var string
     */
    public $flattenMode;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) interface.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'flattenMode' => 'FlattenMode',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->flattenMode) {
            $res['FlattenMode'] = $this->flattenMode;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCnameFlatteningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlattenMode'])) {
            $model->flattenMode = $map['FlattenMode'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
