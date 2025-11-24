<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class DescribeCCMVersionResponseBody extends Model
{
    /**
     * @var CCMVersionsValue[]
     */
    public $CCMVersions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'CCMVersions' => 'CCMVersions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->CCMVersions)) {
            Model::validateArray($this->CCMVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CCMVersions) {
            if (\is_array($this->CCMVersions)) {
                $res['CCMVersions'] = [];
                foreach ($this->CCMVersions as $key1 => $value1) {
                    $res['CCMVersions'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['CCMVersions'])) {
            if (!empty($map['CCMVersions'])) {
                $model->CCMVersions = [];
                foreach ($map['CCMVersions'] as $key1 => $value1) {
                    $model->CCMVersions[$key1] = CCMVersionsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
