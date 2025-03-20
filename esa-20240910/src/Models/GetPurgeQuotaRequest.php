<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetPurgeQuotaRequest extends Model
{
    /**
     * @description The website ID. You can call the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation to obtain the ID.
     *
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The type of the purge task. Valid values:
     *
     *   **file** (default): purges the cache by file.
     *   **cachetag**: purges the cache by cache tag.
     *   **directory**: purges the cache by directory.
     *   **ignoreParams**: purges the cache by URL with specific parameters ignored.
     *   **hostname**: purges the cache by hostname.
     *   **purgeall**: purges all cache.
     *
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'siteId' => 'SiteId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPurgeQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
