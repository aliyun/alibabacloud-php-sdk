<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\asrResult\asrResult;

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
        if (\is_array($this->asrResult)) {
            Model::validateArray($this->asrResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrResult) {
            if (\is_array($this->asrResult)) {
                $res['AsrResult'] = [];
                $n1 = 0;
                foreach ($this->asrResult as $item1) {
                    $res['AsrResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrResult'])) {
            if (!empty($map['AsrResult'])) {
                $model->asrResult = [];
                $n1 = 0;
                foreach ($map['AsrResult'] as $item1) {
                    $model->asrResult[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
