<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\tags;
use AlibabaCloud\Tea\Model;

class cens extends Model
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
     * @var string[]
     */
    public $cenBandwidthPackageIds;

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
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'status'                 => 'Status',
        'creationTime'           => 'CreationTime',
        'cenBandwidthPackageIds' => 'CenBandwidthPackageIds',
        'description'            => 'Description',
        'cenId'                  => 'CenId',
        'protectionLevel'        => 'ProtectionLevel',
        'tags'                   => 'Tags',
        'name'                   => 'Name',
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
        if (null !== $this->cenBandwidthPackageIds) {
            $res['CenBandwidthPackageIds'] = $this->cenBandwidthPackageIds;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cens
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
        if (isset($map['CenBandwidthPackageIds'])) {
            if (!empty($map['CenBandwidthPackageIds'])) {
                $model->cenBandwidthPackageIds = $map['CenBandwidthPackageIds'];
            }
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
