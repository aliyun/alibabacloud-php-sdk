<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class InsertOrUpdateRegionRequest extends Model
{
    /**
     * @var bool
     */
    public $debugEnable;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $mseInstanceId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $regionTag;

    /**
     * @var string
     */
    public $registryType;
    protected $_name = [
        'debugEnable' => 'DebugEnable',
        'description' => 'Description',
        'id' => 'Id',
        'mseInstanceId' => 'MseInstanceId',
        'regionName' => 'RegionName',
        'regionTag' => 'RegionTag',
        'registryType' => 'RegistryType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->debugEnable) {
            $res['DebugEnable'] = $this->debugEnable;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mseInstanceId) {
            $res['MseInstanceId'] = $this->mseInstanceId;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->regionTag) {
            $res['RegionTag'] = $this->regionTag;
        }

        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
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
        if (isset($map['DebugEnable'])) {
            $model->debugEnable = $map['DebugEnable'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MseInstanceId'])) {
            $model->mseInstanceId = $map['MseInstanceId'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['RegionTag'])) {
            $model->regionTag = $map['RegionTag'];
        }

        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }

        return $model;
    }
}
