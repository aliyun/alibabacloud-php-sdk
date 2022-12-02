<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectRequest\transferMapping;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectRequest\transferMapping\databases\tables;
use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $mappedName;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'databaseId'   => 'DatabaseId',
        'databaseName' => 'DatabaseName',
        'mappedName'   => 'MappedName',
        'tables'       => 'Tables',
        'tenantName'   => 'TenantName',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->mappedName) {
            $res['MappedName'] = $this->mappedName;
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
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['MappedName'])) {
            $model->mappedName = $map['MappedName'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
