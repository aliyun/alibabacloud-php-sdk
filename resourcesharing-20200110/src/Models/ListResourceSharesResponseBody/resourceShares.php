<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesResponseBody\resourceShares\tags;

class resourceShares extends Model
{
    /**
     * @var bool
     */
    public $allowExternalTargets;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceShareId;

    /**
     * @var string
     */
    public $resourceShareName;

    /**
     * @var string
     */
    public $resourceShareOwner;

    /**
     * @var string
     */
    public $resourceShareStatus;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'allowExternalTargets' => 'AllowExternalTargets',
        'createTime' => 'CreateTime',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceShareId' => 'ResourceShareId',
        'resourceShareName' => 'ResourceShareName',
        'resourceShareOwner' => 'ResourceShareOwner',
        'resourceShareStatus' => 'ResourceShareStatus',
        'tags' => 'Tags',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowExternalTargets) {
            $res['AllowExternalTargets'] = $this->allowExternalTargets;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }

        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }

        if (null !== $this->resourceShareOwner) {
            $res['ResourceShareOwner'] = $this->resourceShareOwner;
        }

        if (null !== $this->resourceShareStatus) {
            $res['ResourceShareStatus'] = $this->resourceShareStatus;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AllowExternalTargets'])) {
            $model->allowExternalTargets = $map['AllowExternalTargets'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }

        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }

        if (isset($map['ResourceShareOwner'])) {
            $model->resourceShareOwner = $map['ResourceShareOwner'];
        }

        if (isset($map['ResourceShareStatus'])) {
            $model->resourceShareStatus = $map['ResourceShareStatus'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
