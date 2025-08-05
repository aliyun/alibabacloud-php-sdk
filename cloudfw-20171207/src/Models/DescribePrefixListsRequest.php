<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribePrefixListsRequest extends Model
{
    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The source IP address of the request.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'regionNo' => 'RegionNo',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePrefixListsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
