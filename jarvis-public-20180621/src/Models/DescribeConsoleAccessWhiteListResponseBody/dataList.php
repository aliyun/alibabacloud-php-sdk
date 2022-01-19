<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeConsoleAccessWhiteListResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $dstIp;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtRealExpire;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $insProduct;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $srcIp;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'dstIp'         => 'DstIp',
        'gmtCreate'     => 'GmtCreate',
        'gmtRealExpire' => 'GmtRealExpire',
        'id'            => 'Id',
        'insProduct'    => 'InsProduct',
        'regionId'      => 'RegionId',
        'srcIp'         => 'SrcIp',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstIp) {
            $res['DstIp'] = $this->dstIp;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtRealExpire) {
            $res['GmtRealExpire'] = $this->gmtRealExpire;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->insProduct) {
            $res['InsProduct'] = $this->insProduct;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DstIp'])) {
            $model->dstIp = $map['DstIp'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtRealExpire'])) {
            $model->gmtRealExpire = $map['GmtRealExpire'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InsProduct'])) {
            $model->insProduct = $map['InsProduct'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
