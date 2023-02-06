<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponseBody\keyPairs;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponseBody\keyPairs\keyPair\tags;
use AlibabaCloud\Tea\Model;

class keyPair extends Model
{
    /**
     * @description The time when the key pair was created.
     *
     * @example 2019-12-04T13:35:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The fingerprint of the key pair.
     *
     * @example ABC1234567
     *
     * @var string
     */
    public $keyPairFingerPrint;

    /**
     * @description The name of the key pair.
     *
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-amnhr7u7c7hj****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags of the key pair.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'keyPairFingerPrint' => 'KeyPairFingerPrint',
        'keyPairName'        => 'KeyPairName',
        'resourceGroupId'    => 'ResourceGroupId',
        'tags'               => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->keyPairFingerPrint) {
            $res['KeyPairFingerPrint'] = $this->keyPairFingerPrint;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyPair
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['KeyPairFingerPrint'])) {
            $model->keyPairFingerPrint = $map['KeyPairFingerPrint'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
