<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSqlStatementContentsResponseBody\sqlStatementContents;

class ListSqlStatementContentsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sqlStatementContents
     */
    public $sqlStatementContents;
    protected $_name = [
        'requestId' => 'requestId',
        'sqlStatementContents' => 'sqlStatementContents',
    ];

    public function validate()
    {
        if (null !== $this->sqlStatementContents) {
            $this->sqlStatementContents->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sqlStatementContents) {
            $res['sqlStatementContents'] = null !== $this->sqlStatementContents ? $this->sqlStatementContents->toArray($noStream) : $this->sqlStatementContents;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sqlStatementContents'])) {
            $model->sqlStatementContents = sqlStatementContents::fromMap($map['sqlStatementContents']);
        }

        return $model;
    }
}
