<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AllocateEipAddressRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $minCount;
    protected $_name = [
        'version'     => 'Version',
        'ensRegionId' => 'EnsRegionId',
        'count'       => 'Count',
        'minCount'    => 'MinCount',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->minCount) {
            $res['MinCount'] = $this->minCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateEipAddressRequest
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['MinCount'])) {
            $model->minCount = $map['MinCount'];
        }

        return $model;
    }
}
