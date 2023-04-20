<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponseBody;

use AlibabaCloud\Tea\Model;

class whUsage extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $cdnTraffic;

    /**
     * @example 0
     *
     * @var int
     */
    public $storageSize;
    protected $_name = [
        'cdnTraffic'  => 'CdnTraffic',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnTraffic) {
            $res['CdnTraffic'] = $this->cdnTraffic;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnTraffic'])) {
            $model->cdnTraffic = $map['CdnTraffic'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
