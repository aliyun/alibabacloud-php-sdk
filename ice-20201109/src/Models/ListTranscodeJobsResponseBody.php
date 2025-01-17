<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs;

class ListTranscodeJobsResponseBody extends Model
{
    /**
     * @var jobs[]
     */
    public $jobs;
    /**
     * @var string
     */
    public $nextPageToken;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobs'          => 'Jobs',
        'nextPageToken' => 'NextPageToken',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->jobs)) {
            Model::validateArray($this->jobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobs) {
            if (\is_array($this->jobs)) {
                $res['Jobs'] = [];
                $n1          = 0;
                foreach ($this->jobs as $item1) {
                    $res['Jobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
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
        if (isset($map['Jobs'])) {
            if (!empty($map['Jobs'])) {
                $model->jobs = [];
                $n1          = 0;
                foreach ($map['Jobs'] as $item1) {
                    $model->jobs[$n1++] = jobs::fromMap($item1);
                }
            }
        }

        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
