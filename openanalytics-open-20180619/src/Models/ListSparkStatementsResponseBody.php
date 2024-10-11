<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkStatementsResponseBody\statements;
use AlibabaCloud\Tea\Model;

class ListSparkStatementsResponseBody extends Model
{
    /**
     * @example C2AB7692-B9EF-4A50-BCFF-0DC5B6F080E8
     *
     * @var string
     */
    public $requestId;

    /**
     * @var statements[]
     */
    public $statements;
    protected $_name = [
        'requestId'  => 'RequestId',
        'statements' => 'Statements',
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
        if (null !== $this->statements) {
            $res['Statements'] = [];
            if (null !== $this->statements && \is_array($this->statements)) {
                $n = 0;
                foreach ($this->statements as $item) {
                    $res['Statements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSparkStatementsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Statements'])) {
            if (!empty($map['Statements'])) {
                $model->statements = [];
                $n                 = 0;
                foreach ($map['Statements'] as $item) {
                    $model->statements[$n++] = null !== $item ? statements::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
