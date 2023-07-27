<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class Bucket extends Model
{
    /**
     * @var string
     */
    public $creationDate;

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
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceGroupId;

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
        'resourceGroupId'  => 'ResourceGroupId',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
