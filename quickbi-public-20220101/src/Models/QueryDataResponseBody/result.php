<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataResponseBody\result\headers;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Column headers.
     *
     * @var headers[]
     */
    public $headers;

    /**
     * @description The SQL query that was executed.
     * > The filter conditions in the returned SQL statement include not only the parameters passed through this interface but also the row and column permission configurations.
     *
     * @example test
     *
     * @var string
     */
    public $sql;

    /**
     * @description The results of the query.
     *
     * @var mixed[][]
     */
    public $values;
    protected $_name = [
        'headers' => 'Headers',
        'sql' => 'Sql',
        'values' => 'Values',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = [];
            if (null !== $this->headers && \is_array($this->headers)) {
                $n = 0;
                foreach ($this->headers as $item) {
                    $res['Headers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n = 0;
                foreach ($map['Headers'] as $item) {
                    $model->headers[$n++] = null !== $item ? headers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
