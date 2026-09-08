<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataMaskingEncryptionAlgorithmsResponseBody\algorithms;

class ListDataMaskingEncryptionAlgorithmsResponseBody extends Model
{
    /**
     * @var algorithms[]
     */
    public $algorithms;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'algorithms' => 'Algorithms',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->algorithms)) {
            Model::validateArray($this->algorithms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithms) {
            if (\is_array($this->algorithms)) {
                $res['Algorithms'] = [];
                $n1 = 0;
                foreach ($this->algorithms as $item1) {
                    $res['Algorithms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Algorithms'])) {
            if (!empty($map['Algorithms'])) {
                $model->algorithms = [];
                $n1 = 0;
                foreach ($map['Algorithms'] as $item1) {
                    $model->algorithms[$n1] = algorithms::fromMap($item1);
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
