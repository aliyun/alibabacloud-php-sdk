<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class ModifyFileSystemRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $fileSystemName;

    /**
     * @var string
     */
    public $inputRegionId;

    /**
     * @var int
     */
    public $provisionedThroughputInMiBps;

    /**
     * @var int
     */
    public $spaceCapacity;

    /**
     * @var string
     */
    public $throughputMode;
    protected $_name = [
        'description'                  => 'Description',
        'fileSystemId'                 => 'FileSystemId',
        'fileSystemName'               => 'FileSystemName',
        'inputRegionId'                => 'InputRegionId',
        'provisionedThroughputInMiBps' => 'ProvisionedThroughputInMiBps',
        'spaceCapacity'                => 'SpaceCapacity',
        'throughputMode'               => 'ThroughputMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemName) {
            $res['FileSystemName'] = $this->fileSystemName;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->provisionedThroughputInMiBps) {
            $res['ProvisionedThroughputInMiBps'] = $this->provisionedThroughputInMiBps;
        }
        if (null !== $this->spaceCapacity) {
            $res['SpaceCapacity'] = $this->spaceCapacity;
        }
        if (null !== $this->throughputMode) {
            $res['ThroughputMode'] = $this->throughputMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemName'])) {
            $model->fileSystemName = $map['FileSystemName'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['ProvisionedThroughputInMiBps'])) {
            $model->provisionedThroughputInMiBps = $map['ProvisionedThroughputInMiBps'];
        }
        if (isset($map['SpaceCapacity'])) {
            $model->spaceCapacity = $map['SpaceCapacity'];
        }
        if (isset($map['ThroughputMode'])) {
            $model->throughputMode = $map['ThroughputMode'];
        }

        return $model;
    }
}
