<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeOfficeSitesRequest extends Model
{
    /**
     * @description The number of entries to return on each page.
     *
     *   Maximum value: 100.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The office network IDs. You can specify the IDs of 1 to 100 office networks.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string[]
     */
    public $officeSiteId;

    /**
     * @description The account type of the office network.
     *
     * Valid values:
     *
     *   SIMPLE: convenience account
     *
     * <!-- -->
     *
     *   AD_CONNECTOR: enterprise Active Directory (AD) account
     *
     * <!-- -->
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The office network status.
     *
     * Valid values:
     *
     *   REGISTERING: The office network is being registered.
     *
     * <!-- -->
     *
     *   DEREGISTERING: The office network is being deregistered.
     *
     * <!-- -->
     *
     *   REGISTERED: The office network is registered.
     *
     * <!-- -->
     *
     *   NEEDCONFIGTRUST: A trust relationship is required for the office network.
     *
     * <!-- -->
     *
     *   CONFIGTRUSTFAILED: A trust relationship fails to be configured for the office network.
     *
     * <!-- -->
     *
     *   DEREGISTERED: The office network is deregistered.
     *
     * <!-- -->
     *
     *   ERROR: One or more configurations of the office network are invalid.
     *
     * <!-- -->
     *
     *   CONFIGTRUSTING: A trust relationship is being configured for the office network.
     *
     * <!-- -->
     *
     *   NEEDCONFIGUSER: Users are required for the office network.
     *
     * <!-- -->
     * @example REGISTERED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'officeSiteId'   => 'OfficeSiteId',
        'officeSiteType' => 'OfficeSiteType',
        'regionId'       => 'RegionId',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOfficeSitesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OfficeSiteId'])) {
            if (!empty($map['OfficeSiteId'])) {
                $model->officeSiteId = $map['OfficeSiteId'];
            }
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
