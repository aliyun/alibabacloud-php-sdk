<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponseBody\registeredMediaList;

class RegisterMediaResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedFileURLs;

    /**
     * @var registeredMediaList[]
     */
    public $registeredMediaList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedFileURLs' => 'FailedFileURLs',
        'registeredMediaList' => 'RegisteredMediaList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->failedFileURLs)) {
            Model::validateArray($this->failedFileURLs);
        }
        if (\is_array($this->registeredMediaList)) {
            Model::validateArray($this->registeredMediaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedFileURLs) {
            if (\is_array($this->failedFileURLs)) {
                $res['FailedFileURLs'] = [];
                $n1 = 0;
                foreach ($this->failedFileURLs as $item1) {
                    $res['FailedFileURLs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->registeredMediaList) {
            if (\is_array($this->registeredMediaList)) {
                $res['RegisteredMediaList'] = [];
                $n1 = 0;
                foreach ($this->registeredMediaList as $item1) {
                    $res['RegisteredMediaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailedFileURLs'])) {
            if (!empty($map['FailedFileURLs'])) {
                $model->failedFileURLs = [];
                $n1 = 0;
                foreach ($map['FailedFileURLs'] as $item1) {
                    $model->failedFileURLs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegisteredMediaList'])) {
            if (!empty($map['RegisteredMediaList'])) {
                $model->registeredMediaList = [];
                $n1 = 0;
                foreach ($map['RegisteredMediaList'] as $item1) {
                    $model->registeredMediaList[$n1] = registeredMediaList::fromMap($item1);
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
