<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody\cens\packageIds;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody\cens\tags;

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
     * @var packageIds[]
     */
    public $packageIds;

    /**
     * @var string
     */
    public $protectionLevel;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'cenId' => 'CenId',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ipv6Level' => 'Ipv6Level',
        'name' => 'Name',
        'packageIds' => 'PackageIds',
        'protectionLevel' => 'ProtectionLevel',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->packageIds)) {
            Model::validateArray($this->packageIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->packageIds)) {
                $res['PackageIds'] = [];
                $n1 = 0;
                foreach ($this->packageIds as $item1) {
                    $res['PackageIds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['PackageIds'] as $item1) {
                    $model->packageIds[$n1++] = packageIds::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
