<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsRegionIdIpv6InfoRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $ensRegionId;
    protected $_name = [
        'version'     => 'Version',
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsRegionIdIpv6InfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        return $model;
    }
}
