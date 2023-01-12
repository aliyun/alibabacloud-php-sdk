<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListCommonAreasRequest extends Model
{
    /**
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $isEpg;

    /**
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
