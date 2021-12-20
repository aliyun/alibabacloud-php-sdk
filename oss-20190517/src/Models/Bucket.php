<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class Bucket extends Model
{
    /**
     * @description The time when the bucket is created.
     *
     * @var string
     */
    public $creationDate;

    /**
     * @description The public endpoint used to access the bucket over the Internet.
     *
     * @var string
     */
    public $extranetEndpoint;

    /**
     * @description The internal endpoint used to access the bucket from ECS instances in the same region.
     *
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @description The data center in which the bucket is located.
     *
     * @var string
     */
    public $location;

    /**
     * @description The name of the bucket.
     *
     * @var string
     */
    public $name;

    /**
     * @description The physical location of the bucket.
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'creationDate'     => 'CreationDate',
        'extranetEndpoint' => 'ExtranetEndpoint',
        'intranetEndpoint' => 'IntranetEndpoint',
        'location'         => 'Location',
        'name'             => 'Name',
        'region'           => 'Region',
        'storageClass'     => 'StorageClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Bucket
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
