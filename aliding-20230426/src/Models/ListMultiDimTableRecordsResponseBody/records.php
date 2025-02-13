<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsResponseBody\records\createdBy;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsResponseBody\records\lastModifiedBy;

class records extends Model
{
    /**
     * @var createdBy
     */
    public $createdBy;
    /**
     * @var int
     */
    public $createdTime;
    /**
     * @var mixed[]
     */
    public $fields;
    /**
     * @var string
     */
    public $id;
    /**
     * @var lastModifiedBy
     */
    public $lastModifiedBy;
    /**
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
        if (null !== $this->createdBy) {
            $this->createdBy->validate();
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (null !== $this->lastModifiedBy) {
            $this->lastModifiedBy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = null !== $this->createdBy ? $this->createdBy->toArray($noStream) : $this->createdBy;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                foreach ($this->fields as $key1 => $value1) {
                    $res['Fields'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastModifiedBy) {
            $res['LastModifiedBy'] = null !== $this->lastModifiedBy ? $this->lastModifiedBy->toArray($noStream) : $this->lastModifiedBy;
        }

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
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
        if (isset($map['CreatedBy'])) {
            $model->createdBy = createdBy::fromMap($map['CreatedBy']);
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                foreach ($map['Fields'] as $key1 => $value1) {
                    $model->fields[$key1] = $value1;
                }
            }
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
