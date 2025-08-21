<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionResponseBody\result\validateResult;

class result extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var validateResult[]
     */
    public $validateResult;

    /**
     * @var string
     */
    public $validateType;
    protected $_name = [
        'status' => 'status',
        'validateResult' => 'validateResult',
        'validateType' => 'validateType',
    ];

    public function validate()
    {
        if (\is_array($this->validateResult)) {
            Model::validateArray($this->validateResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->validateResult) {
            if (\is_array($this->validateResult)) {
                $res['validateResult'] = [];
                $n1 = 0;
                foreach ($this->validateResult as $item1) {
                    $res['validateResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->validateType) {
            $res['validateType'] = $this->validateType;
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['validateResult'])) {
            if (!empty($map['validateResult'])) {
                $model->validateResult = [];
                $n1 = 0;
                foreach ($map['validateResult'] as $item1) {
                    $model->validateResult[$n1] = validateResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['validateType'])) {
            $model->validateType = $map['validateType'];
        }

        return $model;
    }
}
