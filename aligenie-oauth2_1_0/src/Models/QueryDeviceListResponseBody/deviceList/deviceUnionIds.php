<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\QueryDeviceListResponseBody\deviceList;

use AlibabaCloud\Dara\Model;

class deviceUnionIds extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $unionId;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'unionId' => 'UnionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
