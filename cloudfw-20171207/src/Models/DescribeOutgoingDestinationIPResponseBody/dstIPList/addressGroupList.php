<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponseBody\dstIPList;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return addressGroupList
     */
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
