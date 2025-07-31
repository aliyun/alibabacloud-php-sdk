<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateRowPermissionRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateRowPermissionRequest\updateRowPermissionCommand\mappingColumns;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateRowPermissionRequest\updateRowPermissionCommand\rules;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateRowPermissionRequest\updateRowPermissionCommand\tables;
use AlibabaCloud\Tea\Model;

class updateRowPermissionCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var mappingColumns[]
     */
    public $mappingColumns;

    /**
     * @var string
     */
    public $rowPermissionDesc;

    /**
     * @description This parameter is required.
     *
     * @example 30009999
     *
     * @var int
     */
    public $rowPermissionId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $rowPermissionName;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var tables[]
     */
    public $tables;
    protected $_name = [
        'mappingColumns' => 'MappingColumns',
        'rowPermissionDesc' => 'RowPermissionDesc',
        'rowPermissionId' => 'RowPermissionId',
        'rowPermissionName' => 'RowPermissionName',
        'rules' => 'Rules',
        'tables' => 'Tables',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappingColumns) {
            $res['MappingColumns'] = [];
            if (null !== $this->mappingColumns && \is_array($this->mappingColumns)) {
                $n = 0;
                foreach ($this->mappingColumns as $item) {
                    $res['MappingColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rowPermissionDesc) {
            $res['RowPermissionDesc'] = $this->rowPermissionDesc;
        }
        if (null !== $this->rowPermissionId) {
            $res['RowPermissionId'] = $this->rowPermissionId;
        }
        if (null !== $this->rowPermissionName) {
            $res['RowPermissionName'] = $this->rowPermissionName;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tables) {
            $res['Tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['Tables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateRowPermissionCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MappingColumns'])) {
            if (!empty($map['MappingColumns'])) {
                $model->mappingColumns = [];
                $n = 0;
                foreach ($map['MappingColumns'] as $item) {
                    $model->mappingColumns[$n++] = null !== $item ? mappingColumns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RowPermissionDesc'])) {
            $model->rowPermissionDesc = $map['RowPermissionDesc'];
        }
        if (isset($map['RowPermissionId'])) {
            $model->rowPermissionId = $map['RowPermissionId'];
        }
        if (isset($map['RowPermissionName'])) {
            $model->rowPermissionName = $map['RowPermissionName'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
