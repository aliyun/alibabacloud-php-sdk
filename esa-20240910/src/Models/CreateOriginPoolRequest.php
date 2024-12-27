<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateOriginPoolRequest\origins;
use AlibabaCloud\Tea\Model;

class CreateOriginPoolRequest extends Model
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
     * @var origins[]
     */
    public $origins;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'enabled' => 'Enabled',
        'name'    => 'Name',
        'origins' => 'Origins',
        'siteId'  => 'SiteId',
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
                $n              = 0;
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
