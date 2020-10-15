<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponse;

use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponse\pushResults\pushResult;
use AlibabaCloud\Tea\Model;

class pushResults extends Model
{
    /**
     * @var pushResult[]
     */
    public $pushResult;
    protected $_name = [
        'pushResult' => 'PushResult',
    ];

    public function validate()
    {
        Model::validateRequired('pushResult', $this->pushResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushResult) {
            $res['PushResult'] = [];
            if (null !== $this->pushResult && \is_array($this->pushResult)) {
                $n = 0;
                foreach ($this->pushResult as $item) {
                    $res['PushResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushResult'])) {
            if (!empty($map['PushResult'])) {
                $model->pushResult = [];
                $n                 = 0;
                foreach ($map['PushResult'] as $item) {
                    $model->pushResult[$n++] = null !== $item ? pushResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
