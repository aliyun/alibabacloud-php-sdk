<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebReportTopIpResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example 90998690
     *
     * @var string
     */
    public $areaId;

    /**
     * @example 5
     *
     * @var int
     */
    public $count;

    /**
     * @example 100017
     *
     * @var string
     */
    public $isp;

    /**
     * @example 117.186.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'areaId'   => 'AreaId',
        'count'    => 'Count',
        'isp'      => 'Isp',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
