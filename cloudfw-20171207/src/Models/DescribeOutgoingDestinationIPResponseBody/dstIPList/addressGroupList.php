<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList;

use AlibabaCloud\Dara\Model;

class addressGroupList extends Model
{
    /**
     * @var string
     */
    public $addressGroupName;

    /**
     * @var string
     */
    public $addressGroupUUID;
    protected $_name = [
        'addressGroupName' => 'AddressGroupName',
        'addressGroupUUID' => 'AddressGroupUUID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressGroupName) {
            $res['AddressGroupName'] = $this->addressGroupName;
        }

        if (null !== $this->addressGroupUUID) {
            $res['AddressGroupUUID'] = $this->addressGroupUUID;
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
        if (isset($map['AddressGroupName'])) {
            $model->addressGroupName = $map['AddressGroupName'];
        }

        if (isset($map['AddressGroupUUID'])) {
            $model->addressGroupUUID = $map['AddressGroupUUID'];
        }

        return $model;
    }
}
