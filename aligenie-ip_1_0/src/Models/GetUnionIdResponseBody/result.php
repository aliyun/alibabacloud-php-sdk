<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetUnionIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 4325***765
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 8bh2****8s8
     *
     * @var string
     */
    public $unionId;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'unionId'        => 'UnionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->unionId) {
            $res['UnionId'] = $this->unionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['UnionId'])) {
            $model->unionId = $map['UnionId'];
        }

        return $model;
    }
}
