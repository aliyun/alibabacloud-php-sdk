<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionsResponseBody\versionInfo;

class DescribeVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var versionInfo[]
     */
    public $versionInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'versionInfo' => 'VersionInfo',
    ];

    public function validate()
    {
        if (\is_array($this->versionInfo)) {
            Model::validateArray($this->versionInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->versionInfo) {
            if (\is_array($this->versionInfo)) {
                $res['VersionInfo'] = [];
                $n1 = 0;
                foreach ($this->versionInfo as $item1) {
                    $res['VersionInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VersionInfo'])) {
            if (!empty($map['VersionInfo'])) {
                $model->versionInfo = [];
                $n1 = 0;
                foreach ($map['VersionInfo'] as $item1) {
                    $model->versionInfo[$n1] = versionInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
