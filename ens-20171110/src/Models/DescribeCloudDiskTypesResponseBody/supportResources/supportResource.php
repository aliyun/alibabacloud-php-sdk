<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskTypesResponseBody\supportResources;

use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
    /**
     * @description The category of the disk.
     *
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: all-flash disk.
     *   local_hdd: local HDD.
     *   local_ssd: local SSD.
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-guangzhou-10
     *
     * @var string
     */
    public $ensRegionId;
    protected $_name = [
        'category'    => 'Category',
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        return $model;
    }
}
