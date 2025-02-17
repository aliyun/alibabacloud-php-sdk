<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class ListEnumMappingRequest extends Model
{
    /**
     * @var string
     */
    public $columnIdKey;
    /**
     * @var string
     */
    public $tableIdKey;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'columnIdKey' => 'columnIdKey',
        'tableIdKey'  => 'tableIdKey',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnIdKey) {
            $res['columnIdKey'] = $this->columnIdKey;
        }

        if (null !== $this->tableIdKey) {
            $res['tableIdKey'] = $this->tableIdKey;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['columnIdKey'])) {
            $model->columnIdKey = $map['columnIdKey'];
        }

        if (isset($map['tableIdKey'])) {
            $model->tableIdKey = $map['tableIdKey'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
