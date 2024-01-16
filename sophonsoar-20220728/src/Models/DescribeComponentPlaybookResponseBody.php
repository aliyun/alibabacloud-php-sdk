<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentPlaybookResponseBody\playbooks;
use AlibabaCloud\Tea\Model;

class DescribeComponentPlaybookResponseBody extends Model
{
    /**
     * @description The information about the predefined components.
     *
     * @var playbooks[]
     */
    public $playbooks;

    /**
     * @description The request ID.
     *
     * @example C5F5D6C9-DF1A-5381-92B1-39676F777D20
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbooks' => 'Playbooks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbooks) {
            $res['Playbooks'] = [];
            if (null !== $this->playbooks && \is_array($this->playbooks)) {
                $n = 0;
                foreach ($this->playbooks as $item) {
                    $res['Playbooks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComponentPlaybookResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Playbooks'])) {
            if (!empty($map['Playbooks'])) {
                $model->playbooks = [];
                $n                = 0;
                foreach ($map['Playbooks'] as $item) {
                    $model->playbooks[$n++] = null !== $item ? playbooks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
