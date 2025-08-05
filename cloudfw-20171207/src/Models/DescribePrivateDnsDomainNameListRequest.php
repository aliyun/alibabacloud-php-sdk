<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribePrivateDnsDomainNameListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pd-12345
     *
     * @var string
     */
    public $accessInstanceId;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'accessInstanceId' => 'AccessInstanceId',
        'domainName' => 'DomainName',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'regionNo' => 'RegionNo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessInstanceId) {
            $res['AccessInstanceId'] = $this->accessInstanceId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePrivateDnsDomainNameListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessInstanceId'])) {
            $model->accessInstanceId = $map['AccessInstanceId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
