<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class SubmitQueryRequest extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @example show databases
     *
     * @var string
     */
    public $sql;

    /**
     * @example WS-A129E61C4892D2B4
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'catalogId'   => 'catalogId',
        'sql'         => 'sql',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['catalogId'] = $this->catalogId;
        }
        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['catalogId'])) {
            $model->catalogId = $map['catalogId'];
        }
        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
