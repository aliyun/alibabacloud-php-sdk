<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginPoolRequest\origins;
use AlibabaCloud\Tea\Model;

class UpdateOriginPoolRequest extends Model
{
    /**
     * @description Whether the origin pool is enabled:
     *
     * - true: Enabled;
     * - false: Disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

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
     * @description Information about the origins added to the origin pool. Multiple origins are passed as an array.
     *
     * @var origins[]
     */
    public $origins;

    /**
     * @description The site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 216558609793952
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'enabled' => 'Enabled',
        'id' => 'Id',
        'origins' => 'Origins',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->origins) {
            $res['Origins'] = [];
            if (null !== $this->origins && \is_array($this->origins)) {
                $n = 0;
                foreach ($this->origins as $item) {
                    $res['Origins'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOriginPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Origins'])) {
            if (!empty($map['Origins'])) {
                $model->origins = [];
                $n = 0;
                foreach ($map['Origins'] as $item) {
                    $model->origins[$n++] = null !== $item ? origins::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
