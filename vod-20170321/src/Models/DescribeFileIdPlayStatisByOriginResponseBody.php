<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeFileIdPlayStatisByOriginResponseBody\filePlayStatisList;

class DescribeFileIdPlayStatisByOriginResponseBody extends Model
{
    /**
     * @var filePlayStatisList[]
     */
    public $filePlayStatisList;

    /**
     * @var bool
     */
    public $hasNext;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scrollToken;
    protected $_name = [
        'filePlayStatisList' => 'FilePlayStatisList',
        'hasNext' => 'HasNext',
        'requestId' => 'RequestId',
        'scrollToken' => 'ScrollToken',
    ];

    public function validate()
    {
        if (\is_array($this->filePlayStatisList)) {
            Model::validateArray($this->filePlayStatisList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePlayStatisList) {
            if (\is_array($this->filePlayStatisList)) {
                $res['FilePlayStatisList'] = [];
                $n1 = 0;
                foreach ($this->filePlayStatisList as $item1) {
                    $res['FilePlayStatisList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scrollToken) {
            $res['ScrollToken'] = $this->scrollToken;
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
        if (isset($map['FilePlayStatisList'])) {
            if (!empty($map['FilePlayStatisList'])) {
                $model->filePlayStatisList = [];
                $n1 = 0;
                foreach ($map['FilePlayStatisList'] as $item1) {
                    $model->filePlayStatisList[$n1] = filePlayStatisList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScrollToken'])) {
            $model->scrollToken = $map['ScrollToken'];
        }

        return $model;
    }
}
