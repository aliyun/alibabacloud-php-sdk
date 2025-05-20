<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormFsUsedDetailResponseBody;

use AlibabaCloud\Dara\Model;

class LStorageUsageList extends Model
{
    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $used;

    /**
     * @var string
     */
    public $usedLindormSearch;

    /**
     * @var string
     */
    public $usedLindormSpark;

    /**
     * @var string
     */
    public $usedLindormTable;

    /**
     * @var string
     */
    public $usedLindormTsdb;

    /**
     * @var string
     */
    public $usedOther;
    protected $_name = [
        'capacity' => 'Capacity',
        'diskType' => 'DiskType',
        'used' => 'Used',
        'usedLindormSearch' => 'UsedLindormSearch',
        'usedLindormSpark' => 'UsedLindormSpark',
        'usedLindormTable' => 'UsedLindormTable',
        'usedLindormTsdb' => 'UsedLindormTsdb',
        'usedOther' => 'UsedOther',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->used) {
            $res['Used'] = $this->used;
        }

        if (null !== $this->usedLindormSearch) {
            $res['UsedLindormSearch'] = $this->usedLindormSearch;
        }

        if (null !== $this->usedLindormSpark) {
            $res['UsedLindormSpark'] = $this->usedLindormSpark;
        }

        if (null !== $this->usedLindormTable) {
            $res['UsedLindormTable'] = $this->usedLindormTable;
        }

        if (null !== $this->usedLindormTsdb) {
            $res['UsedLindormTsdb'] = $this->usedLindormTsdb;
        }

        if (null !== $this->usedOther) {
            $res['UsedOther'] = $this->usedOther;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        if (isset($map['UsedLindormSearch'])) {
            $model->usedLindormSearch = $map['UsedLindormSearch'];
        }

        if (isset($map['UsedLindormSpark'])) {
            $model->usedLindormSpark = $map['UsedLindormSpark'];
        }

        if (isset($map['UsedLindormTable'])) {
            $model->usedLindormTable = $map['UsedLindormTable'];
        }

        if (isset($map['UsedLindormTsdb'])) {
            $model->usedLindormTsdb = $map['UsedLindormTsdb'];
        }

        if (isset($map['UsedOther'])) {
            $model->usedOther = $map['UsedOther'];
        }

        return $model;
    }
}
