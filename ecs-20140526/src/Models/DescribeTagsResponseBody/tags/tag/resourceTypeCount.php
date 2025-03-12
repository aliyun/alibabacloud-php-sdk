<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTagsResponseBody\tags\tag;

use AlibabaCloud\Tea\Model;

class resourceTypeCount extends Model
{
    /**
     * @description The number of dedicated hosts to which the tag is added.
     *
     * @example 1
     *
     * @var int
     */
    public $ddh;

    /**
     * @description The number of disks to which the tag is added.
     *
     * @example 15
     *
     * @var int
     */
    public $disk;

    /**
     * @description The number of ENIs to which the tag is added.
     *
     * @example 5
     *
     * @var int
     */
    public $eni;

    /**
     * @description The number of images to which the tag is added.
     *
     * @example 6
     *
     * @var int
     */
    public $image;

    /**
     * @description The number of instances to which the tag is added.
     *
     * @example 45
     *
     * @var int
     */
    public $instance;

    /**
     * @description The number of key pairs to which the tag is added.
     *
     * @example 17
     *
     * @var int
     */
    public $keyPair;

    /**
     * @description The number of launch templates to which the tag is added.
     *
     * @example 6
     *
     * @var int
     */
    public $launchTemplate;

    /**
     * @description The number of reserved instances to which the tag is added.
     *
     * @example 4
     *
     * @var int
     */
    public $reservedInstance;

    /**
     * @description The number of security groups to which the tag is added.
     *
     * @example 4
     *
     * @var int
     */
    public $securitygroup;

    /**
     * @description The number of snapshots to which the tag is added.
     *
     * @example 15
     *
     * @var int
     */
    public $snapshot;

    /**
     * @description The number of automatic snapshot policies to which the tag is added.
     *
     * @example 4
     *
     * @var int
     */
    public $snapshotPolicy;

    /**
     * @description The number of storage volumes to which the tag is added.
     *
     * @example 6
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'ddh'              => 'Ddh',
        'disk'             => 'Disk',
        'eni'              => 'Eni',
        'image'            => 'Image',
        'instance'         => 'Instance',
        'keyPair'          => 'KeyPair',
        'launchTemplate'   => 'LaunchTemplate',
        'reservedInstance' => 'ReservedInstance',
        'securitygroup'    => 'Securitygroup',
        'snapshot'         => 'Snapshot',
        'snapshotPolicy'   => 'SnapshotPolicy',
        'volume'           => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddh) {
            $res['Ddh'] = $this->ddh;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->eni) {
            $res['Eni'] = $this->eni;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->keyPair) {
            $res['KeyPair'] = $this->keyPair;
        }
        if (null !== $this->launchTemplate) {
            $res['LaunchTemplate'] = $this->launchTemplate;
        }
        if (null !== $this->reservedInstance) {
            $res['ReservedInstance'] = $this->reservedInstance;
        }
        if (null !== $this->securitygroup) {
            $res['Securitygroup'] = $this->securitygroup;
        }
        if (null !== $this->snapshot) {
            $res['Snapshot'] = $this->snapshot;
        }
        if (null !== $this->snapshotPolicy) {
            $res['SnapshotPolicy'] = $this->snapshotPolicy;
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
        if (isset($map['Ddh'])) {
            $model->ddh = $map['Ddh'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['Eni'])) {
            $model->eni = $map['Eni'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['KeyPair'])) {
            $model->keyPair = $map['KeyPair'];
        }
        if (isset($map['LaunchTemplate'])) {
            $model->launchTemplate = $map['LaunchTemplate'];
        }
        if (isset($map['ReservedInstance'])) {
            $model->reservedInstance = $map['ReservedInstance'];
        }
        if (isset($map['Securitygroup'])) {
            $model->securitygroup = $map['Securitygroup'];
        }
        if (isset($map['Snapshot'])) {
            $model->snapshot = $map['Snapshot'];
        }
        if (isset($map['SnapshotPolicy'])) {
            $model->snapshotPolicy = $map['SnapshotPolicy'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
