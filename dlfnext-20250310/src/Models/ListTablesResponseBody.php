<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListTablesResponseBody extends Model
{
    /**
     * @example E8ABEB1C3DB893D16576269017992F57
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @var string[]
     */
    public $tables;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'tables' => 'tables',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->tables) {
            $res['tables'] = $this->tables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTablesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }
        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = $map['tables'];
            }
        }

        return $model;
    }
}
