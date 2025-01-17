<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetDetailResponseBody\instances;

class GetCloudAssetDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var instances[]
     */
    public $instances;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'     => 'Count',
        'instances' => 'Instances',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1               = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n1               = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1++] = instances::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
