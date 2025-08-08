<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class CreateLakeHouseSpaceRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $devDbId;

    /**
     * @var string
     */
    public $dwDbType;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $prodDbId;

    /**
     * @var string
     */
    public $spaceConfig;

    /**
     * @var string
     */
    public $spaceName;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'description' => 'Description',
        'devDbId' => 'DevDbId',
        'dwDbType' => 'DwDbType',
        'mode' => 'Mode',
        'prodDbId' => 'ProdDbId',
        'spaceConfig' => 'SpaceConfig',
        'spaceName' => 'SpaceName',
        'tid' => 'Tid',
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

        if (null !== $this->devDbId) {
            $res['DevDbId'] = $this->devDbId;
        }

        if (null !== $this->dwDbType) {
            $res['DwDbType'] = $this->dwDbType;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->prodDbId) {
            $res['ProdDbId'] = $this->prodDbId;
        }

        if (null !== $this->spaceConfig) {
            $res['SpaceConfig'] = $this->spaceConfig;
        }

        if (null !== $this->spaceName) {
            $res['SpaceName'] = $this->spaceName;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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

        if (isset($map['DevDbId'])) {
            $model->devDbId = $map['DevDbId'];
        }

        if (isset($map['DwDbType'])) {
            $model->dwDbType = $map['DwDbType'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['ProdDbId'])) {
            $model->prodDbId = $map['ProdDbId'];
        }

        if (isset($map['SpaceConfig'])) {
            $model->spaceConfig = $map['SpaceConfig'];
        }

        if (isset($map['SpaceName'])) {
            $model->spaceName = $map['SpaceName'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
