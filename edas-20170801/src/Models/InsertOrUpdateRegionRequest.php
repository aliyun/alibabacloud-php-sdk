<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertOrUpdateRegionRequest extends Model
{
    /**
     * @var string
     */
    public $regionTag;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $debugEnable;
    protected $_name = [
        'regionTag'   => 'RegionTag',
        'regionName'  => 'RegionName',
        'description' => 'Description',
        'id'          => 'Id',
        'debugEnable' => 'DebugEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionTag) {
            $res['RegionTag'] = $this->regionTag;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->debugEnable) {
            $res['DebugEnable'] = $this->debugEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertOrUpdateRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionTag'])) {
            $model->regionTag = $map['RegionTag'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['DebugEnable'])) {
            $model->debugEnable = $map['DebugEnable'];
        }

        return $model;
    }
}
