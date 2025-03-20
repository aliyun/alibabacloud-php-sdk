<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateOriginPoolShrinkRequest extends Model
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
     * @var string
     */
    public $originsShrink;

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
        'originsShrink' => 'Origins',
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
        if (null !== $this->originsShrink) {
            $res['Origins'] = $this->originsShrink;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOriginPoolShrinkRequest
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
            $model->originsShrink = $map['Origins'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
