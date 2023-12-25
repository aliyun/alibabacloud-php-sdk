<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DescribeSynDbTablesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 851D11EA-681C-5B38-A065-C3F90BBD49DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried tables.
     *
     * @var string[]
     */
    public $tables;
    protected $_name = [
        'requestId' => 'RequestId',
        'tables'    => 'Tables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSynDbTablesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = $map['Tables'];
            }
        }

        return $model;
    }
}
