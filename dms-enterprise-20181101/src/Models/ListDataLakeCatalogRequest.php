<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ListDataLakeCatalogRequest extends Model
{
    /**
     * @var string
     */
    public $dataRegion;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'dataRegion' => 'DataRegion',
        'searchKey' => 'SearchKey',
        'tid' => 'Tid',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
