<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody\cens\packageIds;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody\cens\tags;
use AlibabaCloud\Tea\Model;

class cens extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @example cen-3gwy16dojz1m65****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The tag value of the CEN instance.
     *
     * @example 2021-06-16T08:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The tag key of the CEN instance.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether IPv6 is supported. Valid value: DISABLED. This value indicates that IPv6 is not supported.
     *
     * >  IPv6 is not supported.
     * @example DISABLED
     *
     * @var string
     */
    public $ipv6Level;

    /**
     * @description The ID of the request.
     *
     * @example testCen
     *
     * @var string
     */
    public $name;

    /**
     * @var packageIds[]
     */
    public $packageIds;

    /**
     * @description The name of the CEN instance.
     *
     * @example REDUCED
     *
     * @var string
     */
    public $protectionLevel;

    /**
     * @description The ID of the region.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the CEN instance.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'cenId'           => 'CenId',
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'ipv6Level'       => 'Ipv6Level',
        'name'            => 'Name',
        'packageIds'      => 'PackageIds',
        'protectionLevel' => 'ProtectionLevel',
        'status'          => 'Status',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipv6Level) {
            $res['Ipv6Level'] = $this->ipv6Level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packageIds) {
            $res['PackageIds'] = [];
            if (null !== $this->packageIds && \is_array($this->packageIds)) {
                $n = 0;
                foreach ($this->packageIds as $item) {
                    $res['PackageIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Ipv6Level'])) {
            $model->ipv6Level = $map['Ipv6Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackageIds'])) {
            if (!empty($map['PackageIds'])) {
                $model->packageIds = [];
                $n                 = 0;
                foreach ($map['PackageIds'] as $item) {
                    $model->packageIds[$n++] = null !== $item ? packageIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}
