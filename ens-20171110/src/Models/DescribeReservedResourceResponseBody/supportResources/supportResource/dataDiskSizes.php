<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources\supportResource;

use AlibabaCloud\Tea\Model;

class dataDiskSizes extends Model
{
    /**
     * @var string[]
     */
    public $dataDiskSize;
    protected $_name = [
        'dataDiskSize' => 'DataDiskSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDiskSizes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskSize'])) {
            if (!empty($map['DataDiskSize'])) {
                $model->dataDiskSize = $map['DataDiskSize'];
            }
        }

        return $model;
    }
}
