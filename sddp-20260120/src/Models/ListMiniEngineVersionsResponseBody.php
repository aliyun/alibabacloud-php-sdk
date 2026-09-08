<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListMiniEngineVersionsResponseBody\kernelVersions;

class ListMiniEngineVersionsResponseBody extends Model
{
    /**
     * @var kernelVersions[]
     */
    public $kernelVersions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kernelVersions' => 'KernelVersions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->kernelVersions)) {
            Model::validateArray($this->kernelVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kernelVersions) {
            if (\is_array($this->kernelVersions)) {
                $res['KernelVersions'] = [];
                $n1 = 0;
                foreach ($this->kernelVersions as $item1) {
                    $res['KernelVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KernelVersions'])) {
            if (!empty($map['KernelVersions'])) {
                $model->kernelVersions = [];
                $n1 = 0;
                foreach ($map['KernelVersions'] as $item1) {
                    $model->kernelVersions[$n1] = kernelVersions::fromMap($item1);
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
