<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceConfigChangeLogResponseBody\data;

use AlibabaCloud\Dara\Model;

class paramChangeLogs extends Model
{
    /**
     * @var bool
     */
    public $applied;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $ID;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $newValue;

    /**
     * @var string
     */
    public $oldValue;
    protected $_name = [
        'applied' => 'Applied',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'ID' => 'ID',
        'name' => 'Name',
        'newValue' => 'NewValue',
        'oldValue' => 'OldValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applied) {
            $res['Applied'] = $this->applied;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }

        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
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
        if (isset($map['Applied'])) {
            $model->applied = $map['Applied'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }

        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }

        return $model;
    }
}
