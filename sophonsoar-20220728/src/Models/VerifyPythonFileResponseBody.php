<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPythonFileResponseBody\syntax;

class VerifyPythonFileResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var syntax[]
     */
    public $syntax;
    protected $_name = [
        'requestId' => 'RequestId',
        'syntax' => 'Syntax',
    ];

    public function validate()
    {
        if (\is_array($this->syntax)) {
            Model::validateArray($this->syntax);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->syntax) {
            if (\is_array($this->syntax)) {
                $res['Syntax'] = [];
                $n1 = 0;
                foreach ($this->syntax as $item1) {
                    $res['Syntax'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Syntax'])) {
            if (!empty($map['Syntax'])) {
                $model->syntax = [];
                $n1 = 0;
                foreach ($map['Syntax'] as $item1) {
                    $model->syntax[$n1] = syntax::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
