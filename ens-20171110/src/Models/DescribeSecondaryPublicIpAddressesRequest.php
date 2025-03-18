<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeSecondaryPublicIpAddressesRequest extends Model
{
    /**
     * @description The ID of the edge node.
     *
     * @example cn-hangzhou-44
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The Internet service provider. Valid values:
     *
     *   cmcc: China Mobile.
     *   unicom: China Unicom.
     *   telecom: China Telecom.
     *
     * @example unicom
     *
     * @var string
     */
    public $isp;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The secondary IP address.
     *
     * @example 12.XXX.XXX.4
     *
     * @var string
     */
    public $secondaryPublicIpAddress;

    /**
     * @description The ID of the secondary public IP address.
     *
     * @example spi-5wys0pio93c9f9ukzj2f2fwyr
     *
     * @var string
     */
    public $secondaryPublicIpId;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'isp' => 'Isp',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'secondaryPublicIpAddress' => 'SecondaryPublicIpAddress',
        'secondaryPublicIpId' => 'SecondaryPublicIpId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->secondaryPublicIpAddress) {
            $res['SecondaryPublicIpAddress'] = $this->secondaryPublicIpAddress;
        }
        if (null !== $this->secondaryPublicIpId) {
            $res['SecondaryPublicIpId'] = $this->secondaryPublicIpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecondaryPublicIpAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecondaryPublicIpAddress'])) {
            $model->secondaryPublicIpAddress = $map['SecondaryPublicIpAddress'];
        }
        if (isset($map['SecondaryPublicIpId'])) {
            $model->secondaryPublicIpId = $map['SecondaryPublicIpId'];
        }

        return $model;
    }
}
