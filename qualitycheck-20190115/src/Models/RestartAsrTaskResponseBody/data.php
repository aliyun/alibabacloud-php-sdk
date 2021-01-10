<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RestartAsrTaskResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RestartAsrTaskResponseBody\data\restartResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var restartResult[]
     */
    public $restartResult;
    protected $_name = [
        'restartResult' => 'RestartResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restartResult) {
            $res['RestartResult'] = [];
            if (null !== $this->restartResult && \is_array($this->restartResult)) {
                $n = 0;
                foreach ($this->restartResult as $item) {
                    $res['RestartResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RestartResult'])) {
            if (!empty($map['RestartResult'])) {
                $model->restartResult = [];
                $n                    = 0;
                foreach ($map['RestartResult'] as $item) {
                    $model->restartResult[$n++] = null !== $item ? restartResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
