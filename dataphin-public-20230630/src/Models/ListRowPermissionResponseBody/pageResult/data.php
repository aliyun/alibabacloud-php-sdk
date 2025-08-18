<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult\data\mappingColumns;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult\data\rules;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionResponseBody\pageResult\data\tables;

class data extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var mappingColumns[]
     */
    public $mappingColumns;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $rowPermissionDesc;

    /**
     * @var int
     */
    public $rowPermissionId;

    /**
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

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'creator' => 'Creator',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'mappingColumns' => 'MappingColumns',
        'modifier' => 'Modifier',
        'rowPermissionDesc' => 'RowPermissionDesc',
        'rowPermissionId' => 'RowPermissionId',
        'rowPermissionName' => 'RowPermissionName',
        'rules' => 'Rules',
        'tables' => 'Tables',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->mappingColumns)) {
            Model::validateArray($this->mappingColumns);
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->mappingColumns) {
            if (\is_array($this->mappingColumns)) {
                $res['MappingColumns'] = [];
                $n1 = 0;
                foreach ($this->mappingColumns as $item1) {
                    $res['MappingColumns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
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
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['MappingColumns'])) {
            if (!empty($map['MappingColumns'])) {
                $model->mappingColumns = [];
                $n1 = 0;
                foreach ($map['MappingColumns'] as $item1) {
                    $model->mappingColumns[$n1] = mappingColumns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
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
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1] = tables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
