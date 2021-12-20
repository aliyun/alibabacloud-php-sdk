<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketInfoResponseBody;

use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketInfoResponseBody\bucketInfo\accessControlList;
use AlibabaCloud\SDK\Oss\V20190517\Models\Owner;
use AlibabaCloud\Tea\Model;

class bucketInfo extends Model
{
    /**
     * @var accessControlList
     */
    public $accessControlList;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $creationDate;

    /**
     * @var string
     */
    public $crossRegionReplication;

    /**
     * @var string
     */
    public $extranetEndpoint;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Owner
     */
    public $owner;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $transferAcceleration;
    protected $_name = [
        'accessControlList'      => 'AccessControlList',
        'comment'                => 'Comment',
        'creationDate'           => 'CreationDate',
        'crossRegionReplication' => 'CrossRegionReplication',
        'extranetEndpoint'       => 'ExtranetEndpoint',
        'intranetEndpoint'       => 'IntranetEndpoint',
        'location'               => 'Location',
        'name'                   => 'Name',
        'owner'                  => 'Owner',
        'storageClass'           => 'StorageClass',
        'transferAcceleration'   => 'TransferAcceleration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlList) {
            $res['AccessControlList'] = null !== $this->accessControlList ? $this->accessControlList->toMap() : null;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }
        if (null !== $this->crossRegionReplication) {
            $res['CrossRegionReplication'] = $this->crossRegionReplication;
        }
        if (null !== $this->extranetEndpoint) {
            $res['ExtranetEndpoint'] = $this->extranetEndpoint;
        }
        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->transferAcceleration) {
            $res['TransferAcceleration'] = $this->transferAcceleration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucketInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlList'])) {
            $model->accessControlList = accessControlList::fromMap($map['AccessControlList']);
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }
        if (isset($map['CrossRegionReplication'])) {
            $model->crossRegionReplication = $map['CrossRegionReplication'];
        }
        if (isset($map['ExtranetEndpoint'])) {
            $model->extranetEndpoint = $map['ExtranetEndpoint'];
        }
        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = Owner::fromMap($map['Owner']);
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['TransferAcceleration'])) {
            $model->transferAcceleration = $map['TransferAcceleration'];
        }

        return $model;
    }
}
