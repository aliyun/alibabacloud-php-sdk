<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\asrResult\asrResult;
use AlibabaCloud\Tea\Model;

class asrResult extends Model
{
    /**
     * @var asrResult[]
     */
    public $asrResult;
    protected $_name = [
        'asrResult' => 'AsrResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrResult) {
            $res['AsrResult'] = [];
            if (null !== $this->asrResult && \is_array($this->asrResult)) {
                $n = 0;
                foreach ($this->asrResult as $item) {
                    $res['AsrResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrResult'])) {
            if (!empty($map['AsrResult'])) {
                $model->asrResult = [];
                $n                = 0;
                foreach ($map['AsrResult'] as $item) {
                    $model->asrResult[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
