<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class StrogeCollectTask extends Model
{
    /**
     * @var string
     */
    public $destinationBucketName;

    /**
     * @var string
     */
    public $destinationPrefix;

    /**
     * @var bool
     */
    public $dlfCreated;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $inventoryId;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'destinationBucketName' => 'DestinationBucketName',
        'destinationPrefix'     => 'DestinationPrefix',
        'dlfCreated'            => 'DlfCreated',
        'gmtCreate'             => 'GmtCreate',
        'gmtModified'           => 'GmtModified',
        'id'                    => 'Id',
        'inventoryId'           => 'InventoryId',
        'location'              => 'Location',
        'status'                => 'Status',
        'taskType'              => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationBucketName) {
            $res['DestinationBucketName'] = $this->destinationBucketName;
        }
        if (null !== $this->destinationPrefix) {
            $res['DestinationPrefix'] = $this->destinationPrefix;
        }
        if (null !== $this->dlfCreated) {
            $res['DlfCreated'] = $this->dlfCreated;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inventoryId) {
            $res['InventoryId'] = $this->inventoryId;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StrogeCollectTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationBucketName'])) {
            $model->destinationBucketName = $map['DestinationBucketName'];
        }
        if (isset($map['DestinationPrefix'])) {
            $model->destinationPrefix = $map['DestinationPrefix'];
        }
        if (isset($map['DlfCreated'])) {
            $model->dlfCreated = $map['DlfCreated'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InventoryId'])) {
            $model->inventoryId = $map['InventoryId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
