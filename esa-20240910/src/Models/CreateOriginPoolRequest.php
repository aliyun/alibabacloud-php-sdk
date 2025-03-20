<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateOriginPoolRequest\origins;
use AlibabaCloud\Tea\Model;

class CreateOriginPoolRequest extends Model
{
    /**
     * @description Whether the origin address pool is enabled:
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
     * @description The name of the origin address pool, which must be unique within a site.
     *
     * This parameter is required.
     *
     * @example pool1
     *
     * @var string
     */
    public $name;

    /**
     * @description Information about the origins added to the origin address pool, with multiple origins passed as an array.
     *
     * @var origins[]
     */
    public $origins;

    /**
     * @description The site ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) API.
     *
     * This parameter is required.
     *
     * @example 21655860979****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'enabled' => 'Enabled',
        'name' => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return CreateOriginPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
