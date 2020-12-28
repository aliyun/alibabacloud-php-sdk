<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponseBody\tags;

use AlibabaCloud\Tea\Model;

class resourceTypeCount extends Model
{
    /**
     * @var int
     */
    public $instance;

    /**
     * @var int
     */
    public $image;

    /**
     * @var int
     */
    public $snapshotPolicy;

    /**
     * @var int
     */
    public $ddh;

    /**
     * @var int
     */
    public $securitygroup;

    /**
     * @var int
     */
    public $snapshot;

    /**
     * @var int
     */
    public $reservedInstance;

    /**
     * @var int
     */
    public $eni;

    /**
     * @var int
     */
    public $launchTemplate;

    /**
     * @var int
     */
    public $keyPair;

    /**
     * @var int
     */
    public $disk;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'instance'         => 'Instance',
        'image'            => 'Image',
        'snapshotPolicy'   => 'SnapshotPolicy',
        'ddh'              => 'Ddh',
        'securitygroup'    => 'Securitygroup',
        'snapshot'         => 'Snapshot',
        'reservedInstance' => 'ReservedInstance',
        'eni'              => 'Eni',
        'launchTemplate'   => 'LaunchTemplate',
        'keyPair'          => 'KeyPair',
        'disk'             => 'Disk',
        'volume'           => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->snapshotPolicy) {
            $res['SnapshotPolicy'] = $this->snapshotPolicy;
        }
        if (null !== $this->ddh) {
            $res['Ddh'] = $this->ddh;
        }
        if (null !== $this->securitygroup) {
            $res['Securitygroup'] = $this->securitygroup;
        }
        if (null !== $this->snapshot) {
            $res['Snapshot'] = $this->snapshot;
        }
        if (null !== $this->reservedInstance) {
            $res['ReservedInstance'] = $this->reservedInstance;
        }
        if (null !== $this->eni) {
            $res['Eni'] = $this->eni;
        }
        if (null !== $this->launchTemplate) {
            $res['LaunchTemplate'] = $this->launchTemplate;
        }
        if (null !== $this->keyPair) {
            $res['KeyPair'] = $this->keyPair;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceTypeCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['SnapshotPolicy'])) {
            $model->snapshotPolicy = $map['SnapshotPolicy'];
        }
        if (isset($map['Ddh'])) {
            $model->ddh = $map['Ddh'];
        }
        if (isset($map['Securitygroup'])) {
            $model->securitygroup = $map['Securitygroup'];
        }
        if (isset($map['Snapshot'])) {
            $model->snapshot = $map['Snapshot'];
        }
        if (isset($map['ReservedInstance'])) {
            $model->reservedInstance = $map['ReservedInstance'];
        }
        if (isset($map['Eni'])) {
            $model->eni = $map['Eni'];
        }
        if (isset($map['LaunchTemplate'])) {
            $model->launchTemplate = $map['LaunchTemplate'];
        }
        if (isset($map['KeyPair'])) {
            $model->keyPair = $map['KeyPair'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
