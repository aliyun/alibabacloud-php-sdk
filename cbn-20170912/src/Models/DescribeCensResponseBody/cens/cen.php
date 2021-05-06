<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\cen\cenBandwidthPackageIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\cen\tags;
use AlibabaCloud\Tea\Model;

class cen extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $protectionLevel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var cenBandwidthPackageIds
     */
    public $cenBandwidthPackageIds;
    protected $_name = [
        'status'                 => 'Status',
        'creationTime'           => 'CreationTime',
        'description'            => 'Description',
        'cenId'                  => 'CenId',
        'protectionLevel'        => 'ProtectionLevel',
        'name'                   => 'Name',
        'tags'                   => 'Tags',
        'cenBandwidthPackageIds' => 'CenBandwidthPackageIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->cenBandwidthPackageIds) {
            $res['CenBandwidthPackageIds'] = null !== $this->cenBandwidthPackageIds ? $this->cenBandwidthPackageIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cen
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['CenBandwidthPackageIds'])) {
            $model->cenBandwidthPackageIds = cenBandwidthPackageIds::fromMap($map['CenBandwidthPackageIds']);
        }

        return $model;
    }
}
