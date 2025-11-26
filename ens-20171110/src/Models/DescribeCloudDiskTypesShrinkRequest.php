<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeCloudDiskTypesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $ensRegionIdsShrink;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'ensRegionIdsShrink' => 'EnsRegionIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->ensRegionIdsShrink) {
            $res['EnsRegionIds'] = $this->ensRegionIdsShrink;
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
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['EnsRegionIds'])) {
            $model->ensRegionIdsShrink = $map['EnsRegionIds'];
        }

        return $model;
    }
}
