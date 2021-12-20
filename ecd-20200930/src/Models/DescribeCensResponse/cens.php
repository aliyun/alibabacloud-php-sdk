<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponse;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponse\cens\packageIds;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponse\cens\tags;
use AlibabaCloud\Tea\Model;

class cens extends Model
{
    /**
     * @var string
     */
    public $cenId;

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
    public $ipv6Level;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protectionLevel;

    /**
     * @var string
     */
    public $status;

    /**
     * @var packageIds[]
     */
    public $packageIds;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'cenId'           => 'CenId',
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'ipv6Level'       => 'Ipv6Level',
        'name'            => 'Name',
        'protectionLevel' => 'ProtectionLevel',
        'status'          => 'Status',
        'packageIds'      => 'PackageIds',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('cenId', $this->cenId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('ipv6Level', $this->ipv6Level, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('protectionLevel', $this->protectionLevel, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('packageIds', $this->packageIds, true);
        Model::validateRequired('tags', $this->tags, true);
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
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
