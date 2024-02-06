<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class confVersions extends Model
{
    /**
     * @description The version number.
     *
     * @example 2017-10-11
     *
     * @var string
     */
    public $confVersion;

    /**
     * @description The ID of the node.
     *
     * @example cn-chengdu-telecom
     *
     * @var string
     */
    public $ensRegionId;
    protected $_name = [
        'confVersion' => 'ConfVersion',
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confVersion) {
            $res['ConfVersion'] = $this->confVersion;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return confVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfVersion'])) {
            $model->confVersion = $map['ConfVersion'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        return $model;
    }
}
