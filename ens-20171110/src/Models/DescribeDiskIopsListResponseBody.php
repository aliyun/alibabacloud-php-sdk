<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDiskIopsListResponseBody\diskIopsList;
use AlibabaCloud\Tea\Model;

class DescribeDiskIopsListResponseBody extends Model
{
    /**
     * @description The IOPS monitoring data of the cloud disk.
     *
     * @var diskIopsList[]
     */
    public $diskIopsList;

    /**
     * @description Id of the request
     *
     * @example A7814CAB-DB4E-140A-9D6F-7C8210C1DAC3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diskIopsList' => 'DiskIopsList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskIopsList) {
            $res['DiskIopsList'] = [];
            if (null !== $this->diskIopsList && \is_array($this->diskIopsList)) {
                $n = 0;
                foreach ($this->diskIopsList as $item) {
                    $res['DiskIopsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskIopsListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskIopsList'])) {
            if (!empty($map['DiskIopsList'])) {
                $model->diskIopsList = [];
                $n                   = 0;
                foreach ($map['DiskIopsList'] as $item) {
                    $model->diskIopsList[$n++] = null !== $item ? diskIopsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
