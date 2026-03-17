<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagDropTopNResponseBody\dropTopN;

class DescribeSagDropTopNResponseBody extends Model
{
    /**
     * @var dropTopN[]
     */
    public $dropTopN;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dropTopN' => 'DropTopN',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dropTopN)) {
            Model::validateArray($this->dropTopN);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dropTopN) {
            if (\is_array($this->dropTopN)) {
                $res['DropTopN'] = [];
                $n1 = 0;
                foreach ($this->dropTopN as $item1) {
                    $res['DropTopN'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DropTopN'])) {
            if (!empty($map['DropTopN'])) {
                $model->dropTopN = [];
                $n1 = 0;
                foreach ($map['DropTopN'] as $item1) {
                    $model->dropTopN[$n1] = dropTopN::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
