<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateGlobalDataNetworkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationFileSystemPath;

    /**
     * @var string
     */
    public $destinationId;

    /**
     * @var string
     */
    public $destinationRegion;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $freezeSourceDuringSync;

    /**
     * @var string
     */
    public $sourceFileSystemPath;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'description' => 'Description',
        'destinationFileSystemPath' => 'DestinationFileSystemPath',
        'destinationId' => 'DestinationId',
        'destinationRegion' => 'DestinationRegion',
        'destinationType' => 'DestinationType',
        'freezeSourceDuringSync' => 'FreezeSourceDuringSync',
        'sourceFileSystemPath' => 'SourceFileSystemPath',
        'sourceId' => 'SourceId',
        'sourceRegion' => 'SourceRegion',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationFileSystemPath) {
            $res['DestinationFileSystemPath'] = $this->destinationFileSystemPath;
        }

        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }

        if (null !== $this->destinationRegion) {
            $res['DestinationRegion'] = $this->destinationRegion;
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->freezeSourceDuringSync) {
            $res['FreezeSourceDuringSync'] = $this->freezeSourceDuringSync;
        }

        if (null !== $this->sourceFileSystemPath) {
            $res['SourceFileSystemPath'] = $this->sourceFileSystemPath;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationFileSystemPath'])) {
            $model->destinationFileSystemPath = $map['DestinationFileSystemPath'];
        }

        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }

        if (isset($map['DestinationRegion'])) {
            $model->destinationRegion = $map['DestinationRegion'];
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['FreezeSourceDuringSync'])) {
            $model->freezeSourceDuringSync = $map['FreezeSourceDuringSync'];
        }

        if (isset($map['SourceFileSystemPath'])) {
            $model->sourceFileSystemPath = $map['SourceFileSystemPath'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
