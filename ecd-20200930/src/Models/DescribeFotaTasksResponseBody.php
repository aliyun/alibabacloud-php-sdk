<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaTasksResponseBody\fotaTasks;

class DescribeFotaTasksResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var fotaTasks[]
     */
    public $fotaTasks;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'fotaTasks' => 'FotaTasks',
        'message' => 'Message',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->fotaTasks)) {
            Model::validateArray($this->fotaTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->fotaTasks) {
            if (\is_array($this->fotaTasks)) {
                $res['FotaTasks'] = [];
                $n1 = 0;
                foreach ($this->fotaTasks as $item1) {
                    $res['FotaTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['FotaTasks'])) {
            if (!empty($map['FotaTasks'])) {
                $model->fotaTasks = [];
                $n1 = 0;
                foreach ($map['FotaTasks'] as $item1) {
                    $model->fotaTasks[$n1] = fotaTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
