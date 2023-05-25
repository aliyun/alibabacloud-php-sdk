<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\ipv4PrefixSets;

use AlibabaCloud\Tea\Model;

class ipv4PrefixSet extends Model
{
    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example hide
     *
     * @var string
     */
    public $ipv4Prefix;
    protected $_name = [
        'ipv4Prefix' => 'Ipv4Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4Prefix) {
            $res['Ipv4Prefix'] = $this->ipv4Prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv4PrefixSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4Prefix'])) {
            $model->ipv4Prefix = $map['Ipv4Prefix'];
        }

        return $model;
    }
}
