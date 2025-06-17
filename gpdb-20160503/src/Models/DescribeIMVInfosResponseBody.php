<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeIMVInfosResponseBody\imvInfos;

class DescribeIMVInfosResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var imvInfos[]
     */
    public $imvInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'imvInfos' => 'ImvInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->imvInfos)) {
            Model::validateArray($this->imvInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->imvInfos) {
            if (\is_array($this->imvInfos)) {
                $res['ImvInfos'] = [];
                $n1 = 0;
                foreach ($this->imvInfos as $item1) {
                    $res['ImvInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['ImvInfos'])) {
            if (!empty($map['ImvInfos'])) {
                $model->imvInfos = [];
                $n1 = 0;
                foreach ($map['ImvInfos'] as $item1) {
                    $model->imvInfos[$n1] = imvInfos::fromMap($item1);
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
