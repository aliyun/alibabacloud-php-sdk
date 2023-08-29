<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class BatchGrantPermissionsRequest extends Model
{
    /**
     * @description catalogId
     *
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @var GrantRevokeEntry[]
     */
    public $grantRevokeEntries;

    /**
     * @example Hive
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'catalogId'          => 'CatalogId',
        'grantRevokeEntries' => 'GrantRevokeEntries',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->grantRevokeEntries) {
            $res['GrantRevokeEntries'] = [];
            if (null !== $this->grantRevokeEntries && \is_array($this->grantRevokeEntries)) {
                $n = 0;
                foreach ($this->grantRevokeEntries as $item) {
                    $res['GrantRevokeEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGrantPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['GrantRevokeEntries'])) {
            if (!empty($map['GrantRevokeEntries'])) {
                $model->grantRevokeEntries = [];
                $n                         = 0;
                foreach ($map['GrantRevokeEntries'] as $item) {
                    $model->grantRevokeEntries[$n++] = null !== $item ? GrantRevokeEntry::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
