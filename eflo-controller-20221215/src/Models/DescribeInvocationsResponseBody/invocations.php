<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponseBody\invocations\invocation;
use AlibabaCloud\Tea\Model;

class invocations extends Model
{
    /**
     * @description The file sending records.
     *
     * @var invocation[]
     */
    public $invocation;
    protected $_name = [
        'invocation' => 'Invocation',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocation) {
            $res['Invocation'] = [];
            if (null !== $this->invocation && \is_array($this->invocation)) {
                $n = 0;
                foreach ($this->invocation as $item) {
                    $res['Invocation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Invocation'])) {
            if (!empty($map['Invocation'])) {
                $model->invocation = [];
                $n = 0;
                foreach ($map['Invocation'] as $item) {
                    $model->invocation[$n++] = null !== $item ? invocation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
