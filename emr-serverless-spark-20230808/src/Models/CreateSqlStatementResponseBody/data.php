<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSqlStatementResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example st-1231dfafadfa***
     *
     * @var string
     */
    public $statementId;
    protected $_name = [
        'statementId' => 'statementId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statementId) {
            $res['statementId'] = $this->statementId;
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
        if (isset($map['statementId'])) {
            $model->statementId = $map['statementId'];
        }

        return $model;
    }
}
