<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork\tags;
use AlibabaCloud\Tea\Model;

class cloudConnectNetwork extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $associatedCenOwnerId;

    /**
     * @var string
     */
    public $associatedCloudBoxCount;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $interworkingStatus;

    /**
     * @var string
     */
    public $ccnId;

    /**
     * @var string
     */
    public $availableCloudBoxCount;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $snatCidrBlock;

    /**
     * @var string
     */
    public $associatedCenId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'createTime'              => 'CreateTime',
        'associatedCenOwnerId'    => 'AssociatedCenOwnerId',
        'associatedCloudBoxCount' => 'AssociatedCloudBoxCount',
        'tags'                    => 'Tags',
        'interworkingStatus'      => 'InterworkingStatus',
        'ccnId'                   => 'CcnId',
        'availableCloudBoxCount'  => 'AvailableCloudBoxCount',
        'cidrBlock'               => 'CidrBlock',
        'description'             => 'Description',
        'snatCidrBlock'           => 'SnatCidrBlock',
        'associatedCenId'         => 'AssociatedCenId',
        'name'                    => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->associatedCenOwnerId) {
            $res['AssociatedCenOwnerId'] = $this->associatedCenOwnerId;
        }
        if (null !== $this->associatedCloudBoxCount) {
            $res['AssociatedCloudBoxCount'] = $this->associatedCloudBoxCount;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->interworkingStatus) {
            $res['InterworkingStatus'] = $this->interworkingStatus;
        }
        if (null !== $this->ccnId) {
            $res['CcnId'] = $this->ccnId;
        }
        if (null !== $this->availableCloudBoxCount) {
            $res['AvailableCloudBoxCount'] = $this->availableCloudBoxCount;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->snatCidrBlock) {
            $res['SnatCidrBlock'] = $this->snatCidrBlock;
        }
        if (null !== $this->associatedCenId) {
            $res['AssociatedCenId'] = $this->associatedCenId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudConnectNetwork
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AssociatedCenOwnerId'])) {
            $model->associatedCenOwnerId = $map['AssociatedCenOwnerId'];
        }
        if (isset($map['AssociatedCloudBoxCount'])) {
            $model->associatedCloudBoxCount = $map['AssociatedCloudBoxCount'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['InterworkingStatus'])) {
            $model->interworkingStatus = $map['InterworkingStatus'];
        }
        if (isset($map['CcnId'])) {
            $model->ccnId = $map['CcnId'];
        }
        if (isset($map['AvailableCloudBoxCount'])) {
            $model->availableCloudBoxCount = $map['AvailableCloudBoxCount'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SnatCidrBlock'])) {
            $model->snatCidrBlock = $map['SnatCidrBlock'];
        }
        if (isset($map['AssociatedCenId'])) {
            $model->associatedCenId = $map['AssociatedCenId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
