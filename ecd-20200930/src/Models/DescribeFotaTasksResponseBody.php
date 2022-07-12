<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaTasksResponseBody\fotaTasks;
use AlibabaCloud\Tea\Model;

class DescribeFotaTasksResponseBody extends Model
{
    /**
     * @var fotaTasks[]
     */
    public $fotaTasks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fotaTasks' => 'FotaTasks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fotaTasks) {
            $res['FotaTasks'] = [];
            if (null !== $this->fotaTasks && \is_array($this->fotaTasks)) {
                $n = 0;
                foreach ($this->fotaTasks as $item) {
                    $res['FotaTasks'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeFotaTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FotaTasks'])) {
            if (!empty($map['FotaTasks'])) {
                $model->fotaTasks = [];
                $n                = 0;
                foreach ($map['FotaTasks'] as $item) {
                    $model->fotaTasks[$n++] = null !== $item ? fotaTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
