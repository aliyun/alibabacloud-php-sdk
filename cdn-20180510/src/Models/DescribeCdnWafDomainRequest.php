<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnWafDomainRequest extends Model
{
    /**
     * @description The domain name that you want to query.
     *
     * You can specify only one domain name in each request. You have three options to configure this parameter:
     *
     *   Specify an exact domain name. For example, if you set this parameter to example.com, configuration information of example.com is queried.
     *   Specify a keyword. For example, if you set this parameter to example, configuration information about all domain names that contain example is queried.
     *   Leave this parameter empty. If this parameter is left empty, all accelerated domain names for which WAF is configured are queried.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The region where WAF is enabled. Valid values:
     *
     *   **cn-hangzhou**: inside the Chinese mainland
     *   **ap-southeast-1**: outside the Chinese mainland
     *
     * > ap-southeast-1 includes Hong Kong (China), Macao (China), Taiwan (China), and other countries and regions.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example 1234
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'domainName'      => 'DomainName',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnWafDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
