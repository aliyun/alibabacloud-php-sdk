<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponse;

use AlibabaCloud\Tea\Model;

class confVersions extends Model
{
    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $confVersion;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'confVersion' => 'ConfVersion',
    ];

    public function validate()
    {
        Model::validateRequired('ensRegionId', $this->ensRegionId, true);
        Model::validateRequired('confVersion', $this->confVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->confVersion) {
            $res['ConfVersion'] = $this->confVersion;
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
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['ConfVersion'])) {
            $model->confVersion = $map['ConfVersion'];
        }

        return $model;
    }
}
