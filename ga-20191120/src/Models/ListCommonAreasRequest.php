<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListCommonAreasRequest extends Model
{
    /**
     * @description The IP version used to connect to the GA instance. Valid values:
     *
     *   **IPv4** (default): queries regions that support IPv4.
     *   **IPv6** :queries regions that support IPv6.
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description Specifies whether to query regions where endpoint groups can be deployed.
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * @example true
     *
     * @var bool
     */
    public $isEpg;

    /**
     * @description Specifies whether to query regions supported by GA.
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * @example true
     *
     * @var bool
     */
    public $isIpSet;
    protected $_name = [
        'ipVersion' => 'IpVersion',
        'isEpg'     => 'IsEpg',
        'isIpSet'   => 'IsIpSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->isEpg) {
            $res['IsEpg'] = $this->isEpg;
        }
        if (null !== $this->isIpSet) {
            $res['IsIpSet'] = $this->isIpSet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCommonAreasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IsEpg'])) {
            $model->isEpg = $map['IsEpg'];
        }
        if (isset($map['IsIpSet'])) {
            $model->isIpSet = $map['IsIpSet'];
        }

        return $model;
    }
}
