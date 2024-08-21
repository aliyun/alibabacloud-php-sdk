<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCloudResourceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The cloud service provider.
     *
     * @example aliyun
     *
     * @var string
     */
    public $cloudName;

    /**
     * @description The cloud service.
     *
     * @example OSS
     *
     * @var string
     */
    public $cloudProduct;

    /**
     * @description The total number of cloud resources on which certificates are deployed.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cloudName'    => 'CloudName',
        'cloudProduct' => 'CloudProduct',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }
        if (null !== $this->cloudProduct) {
            $res['CloudProduct'] = $this->cloudProduct;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }
        if (isset($map['CloudProduct'])) {
            $model->cloudProduct = $map['CloudProduct'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
