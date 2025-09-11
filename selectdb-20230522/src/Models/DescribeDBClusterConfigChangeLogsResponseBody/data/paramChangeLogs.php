<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigChangeLogsResponseBody\data;

use AlibabaCloud\Dara\Model;

class paramChangeLogs extends Model
{
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
    public $id;

    /**
     * @var bool
     */
    public $isApplied;

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
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'isApplied' => 'IsApplied',
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
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isApplied) {
            $res['IsApplied'] = $this->isApplied;
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
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsApplied'])) {
            $model->isApplied = $map['IsApplied'];
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
