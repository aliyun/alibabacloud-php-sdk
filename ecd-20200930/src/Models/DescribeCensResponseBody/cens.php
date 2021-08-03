<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody\cens\packageIds;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody\cens\tags;
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
     * @var string
     */
    public $ipv6Level;

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
     * @var tags[]
     */
    public $tags;

    /**
     * @var packageIds[]
     */
    public $packageIds;
    protected $_name = [
        'status'          => 'Status',
        'creationTime'    => 'CreationTime',
        'ipv6Level'       => 'Ipv6Level',
        'description'     => 'Description',
        'cenId'           => 'CenId',
        'protectionLevel' => 'ProtectionLevel',
        'name'            => 'Name',
        'tags'            => 'Tags',
        'packageIds'      => 'PackageIds',
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
        if (null !== $this->ipv6Level) {
            $res['Ipv6Level'] = $this->ipv6Level;
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Ipv6Level'])) {
            $model->ipv6Level = $map['Ipv6Level'];
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
