<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnDomainRequest extends Model
{
    /**
     * @example mp-05c3aa1c-****-43ae-a03d-61eff91c592e
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example UNIGTXQTAO
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example FILE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'spaceId'  => 'SpaceId',
        'tenantId' => 'TenantId',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
