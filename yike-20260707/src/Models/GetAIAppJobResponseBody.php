<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAIAppJobResponseBody\AIAppJob;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAIAppJobResponseBody\artifacts;

class GetAIAppJobResponseBody extends Model
{
    /**
     * @var AIAppJob
     */
    public $AIAppJob;

    /**
     * @var artifacts[]
     */
    public $artifacts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIAppJob' => 'AIAppJob',
        'artifacts' => 'Artifacts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIAppJob) {
            $this->AIAppJob->validate();
        }
        if (\is_array($this->artifacts)) {
            Model::validateArray($this->artifacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIAppJob) {
            $res['AIAppJob'] = null !== $this->AIAppJob ? $this->AIAppJob->toArray($noStream) : $this->AIAppJob;
        }

        if (null !== $this->artifacts) {
            if (\is_array($this->artifacts)) {
                $res['Artifacts'] = [];
                $n1 = 0;
                foreach ($this->artifacts as $item1) {
                    $res['Artifacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIAppJob'])) {
            $model->AIAppJob = AIAppJob::fromMap($map['AIAppJob']);
        }

        if (isset($map['Artifacts'])) {
            if (!empty($map['Artifacts'])) {
                $model->artifacts = [];
                $n1 = 0;
                foreach ($map['Artifacts'] as $item1) {
                    $model->artifacts[$n1] = artifacts::fromMap($item1);
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
