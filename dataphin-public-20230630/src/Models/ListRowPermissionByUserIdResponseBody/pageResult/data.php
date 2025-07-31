<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionByUserIdResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionByUserIdResponseBody\pageResult\data\rules;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRowPermissionByUserIdResponseBody\pageResult\data\tables;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 30008888
     *
     * @var string
     */
    public $creator;

    /**
     * @example 2023-03-30T21:37:23Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2025-03-03T10:14Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 30008888
     *
     * @var string
     */
    public $modifier;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @example 30000001
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'creator' => 'Creator',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'modifier' => 'Modifier',
        'rules' => 'Rules',
        'tables' => 'Tables',
        'tenantId' => 'TenantId',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
