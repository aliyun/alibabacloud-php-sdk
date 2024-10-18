<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsResponseBody\records\createdBy;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsResponseBody\records\lastModifiedBy;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var createdBy
     */
    public $createdBy;

    /**
     * @example xxx
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example title,shortTitle
     *
     * @var mixed[]
     */
    public $fields;

    /**
     * @example 123
     *
     * @var string
     */
    public $id;

    /**
     * @var lastModifiedBy
     */
    public $lastModifiedBy;

    /**
     * @example xxx
     *
     * @var int
     */
    public $lastModifiedTime;
    protected $_name = [
        'createdBy'        => 'CreatedBy',
        'createdTime'      => 'CreatedTime',
        'fields'           => 'Fields',
        'id'               => 'Id',
        'lastModifiedBy'   => 'LastModifiedBy',
        'lastModifiedTime' => 'LastModifiedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = null !== $this->createdBy ? $this->createdBy->toMap() : null;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifiedBy) {
            $res['LastModifiedBy'] = null !== $this->lastModifiedBy ? $this->lastModifiedBy->toMap() : null;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedBy'])) {
            $model->createdBy = createdBy::fromMap($map['CreatedBy']);
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifiedBy'])) {
            $model->lastModifiedBy = lastModifiedBy::fromMap($map['LastModifiedBy']);
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        return $model;
    }
}
