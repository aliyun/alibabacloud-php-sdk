<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\CreateNetworkPathRequest\tag;

class CreateNetworkPathRequest extends Model
{
    /**
     * @var string
     */
    public $networkPathDescription;

    /**
     * @var string
     */
    public $networkPathName;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceIpAddress;

    /**
     * @var int
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetIpAddress;

    /**
     * @var int
     */
    public $targetPort;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'networkPathDescription' => 'NetworkPathDescription',
        'networkPathName' => 'NetworkPathName',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceId' => 'SourceId',
        'sourceIpAddress' => 'SourceIpAddress',
        'sourcePort' => 'SourcePort',
        'sourceType' => 'SourceType',
        'tag' => 'Tag',
        'targetId' => 'TargetId',
        'targetIpAddress' => 'TargetIpAddress',
        'targetPort' => 'TargetPort',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkPathDescription) {
            $res['NetworkPathDescription'] = $this->networkPathDescription;
        }

        if (null !== $this->networkPathName) {
            $res['NetworkPathName'] = $this->networkPathName;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceIpAddress) {
            $res['SourceIpAddress'] = $this->sourceIpAddress;
        }

        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetIpAddress) {
            $res['TargetIpAddress'] = $this->targetIpAddress;
        }

        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['NetworkPathDescription'])) {
            $model->networkPathDescription = $map['NetworkPathDescription'];
        }

        if (isset($map['NetworkPathName'])) {
            $model->networkPathName = $map['NetworkPathName'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceIpAddress'])) {
            $model->sourceIpAddress = $map['SourceIpAddress'];
        }

        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TargetIpAddress'])) {
            $model->targetIpAddress = $map['TargetIpAddress'];
        }

        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
