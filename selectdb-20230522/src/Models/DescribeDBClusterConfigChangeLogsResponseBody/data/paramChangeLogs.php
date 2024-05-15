<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigChangeLogsResponseBody\data;

use AlibabaCloud\Tea\Model;

class paramChangeLogs extends Model
{
    /**
     * @example 2022-10-11T08:53:32Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2024-03-08T10:08Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 617975
     *
     * @var int
     */
    public $id;

    /**
     * @example false
     *
     * @var bool
     */
    public $isApplied;

    /**
     * @example cumulative_compaction_rounds_for_each_base_compaction_round
     *
     * @var string
     */
    public $name;

    /**
     * @example 12
     *
     * @var string
     */
    public $newValue;

    /**
     * @example 10
     *
     * @var string
     */
    public $oldValue;
    protected $_name = [
        'gmtCreated'  => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'isApplied'   => 'IsApplied',
        'name'        => 'Name',
        'newValue'    => 'NewValue',
        'oldValue'    => 'OldValue',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return paramChangeLogs
     */
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
