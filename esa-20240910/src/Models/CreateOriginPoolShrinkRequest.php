<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateOriginPoolShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @description This parameter is required.
     *
     * @example CreateOriginPool
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $originsShrink;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'enabled'       => 'Enabled',
        'name'          => 'Name',
        'originsShrink' => 'Origins',
        'siteId'        => 'SiteId',
    ];

    public function validate()
    {
    }

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
