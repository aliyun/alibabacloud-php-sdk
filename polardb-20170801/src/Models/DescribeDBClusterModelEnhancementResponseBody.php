<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterModelEnhancementResponseBody\modelEnhancementKeys;

class DescribeDBClusterModelEnhancementResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $modelEnhancementKeyNumber;

    /**
     * @var modelEnhancementKeys[]
     */
    public $modelEnhancementKeys;

    /**
     * @var string
     */
    public $modelEnhancementStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'modelEnhancementKeyNumber' => 'ModelEnhancementKeyNumber',
        'modelEnhancementKeys' => 'ModelEnhancementKeys',
        'modelEnhancementStatus' => 'ModelEnhancementStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->modelEnhancementKeys)) {
            Model::validateArray($this->modelEnhancementKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->modelEnhancementKeyNumber) {
            $res['ModelEnhancementKeyNumber'] = $this->modelEnhancementKeyNumber;
        }

        if (null !== $this->modelEnhancementKeys) {
            if (\is_array($this->modelEnhancementKeys)) {
                $res['ModelEnhancementKeys'] = [];
                $n1 = 0;
                foreach ($this->modelEnhancementKeys as $item1) {
                    $res['ModelEnhancementKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelEnhancementStatus) {
            $res['ModelEnhancementStatus'] = $this->modelEnhancementStatus;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ModelEnhancementKeyNumber'])) {
            $model->modelEnhancementKeyNumber = $map['ModelEnhancementKeyNumber'];
        }

        if (isset($map['ModelEnhancementKeys'])) {
            if (!empty($map['ModelEnhancementKeys'])) {
                $model->modelEnhancementKeys = [];
                $n1 = 0;
                foreach ($map['ModelEnhancementKeys'] as $item1) {
                    $model->modelEnhancementKeys[$n1] = modelEnhancementKeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModelEnhancementStatus'])) {
            $model->modelEnhancementStatus = $map['ModelEnhancementStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
