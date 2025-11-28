<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListBaaSFabricOrganizationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $baaSFabricOrganizationId;

    /**
     * @var string
     */
    public $baaSFabricOrganizationName;
    protected $_name = [
        'baaSFabricOrganizationId' => 'BaaSFabricOrganizationId',
        'baaSFabricOrganizationName' => 'BaaSFabricOrganizationName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baaSFabricOrganizationId) {
            $res['BaaSFabricOrganizationId'] = $this->baaSFabricOrganizationId;
        }

        if (null !== $this->baaSFabricOrganizationName) {
            $res['BaaSFabricOrganizationName'] = $this->baaSFabricOrganizationName;
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
        if (isset($map['BaaSFabricOrganizationId'])) {
            $model->baaSFabricOrganizationId = $map['BaaSFabricOrganizationId'];
        }

        if (isset($map['BaaSFabricOrganizationName'])) {
            $model->baaSFabricOrganizationName = $map['BaaSFabricOrganizationName'];
        }

        return $model;
    }
}
