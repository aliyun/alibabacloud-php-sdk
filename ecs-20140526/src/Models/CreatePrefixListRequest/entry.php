<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePrefixListRequest;

use AlibabaCloud\Tea\Model;

class entry extends Model
{
    /**
     * @description The CIDR block in entry N. Valid values of N: 0 to 200. Take note of the following items:
     *
     *   The total number of entries must not exceed the `MaxEntries` value.
     *   CIDR block types are determined by the IP address family. You cannot combine IPv4 and IPv6 CIDR blocks in a single prefix list.
     *   CIDR blocks must be unique across all entries in a prefix list. For example, you cannot specify 192.168.1.0/24 twice in the entries of the prefix list.
     *   IP addresses are supported. The system converts IP addresses into CIDR blocks. For example, if you specify 192.168.1.100, the system converts it into the 192.168.1.100/32 CIDR block.
     *   If an IPv6 CIDR block is used, the system converts it to the zero compression format and changes uppercase letters into lowercase ones. For example, if you specify 2001:0DB8:0000:0000:0000:0000:0000:0000/32, the system converts it into 2001:db8::/32.
     *
     * This parameter is empty by default.
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The description in entry N. The description must be 2 to 32 characters in length and cannot start with `http://` or `https://`. Valid values of N: 0 to 200.
     *
     * @example Description Sample 01
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'cidr'        => 'Cidr',
        'description' => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
