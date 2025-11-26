<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNASAvailableResourceInfoResponseBody\nasAvailableResourceInfo;

class DescribeNASAvailableResourceInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var nasAvailableResourceInfo[]
     */
    public $nasAvailableResourceInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'nasAvailableResourceInfo' => 'NasAvailableResourceInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->nasAvailableResourceInfo)) {
            Model::validateArray($this->nasAvailableResourceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->nasAvailableResourceInfo) {
            if (\is_array($this->nasAvailableResourceInfo)) {
                $res['NasAvailableResourceInfo'] = [];
                $n1 = 0;
                foreach ($this->nasAvailableResourceInfo as $item1) {
                    $res['NasAvailableResourceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NasAvailableResourceInfo'])) {
            if (!empty($map['NasAvailableResourceInfo'])) {
                $model->nasAvailableResourceInfo = [];
                $n1 = 0;
                foreach ($map['NasAvailableResourceInfo'] as $item1) {
                    $model->nasAvailableResourceInfo[$n1] = nasAvailableResourceInfo::fromMap($item1);
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
