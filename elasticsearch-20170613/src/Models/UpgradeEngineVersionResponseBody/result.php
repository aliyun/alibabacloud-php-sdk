<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionResponseBody\result\validateResult;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var validateResult
     */
    public $validateResult;

    /**
     * @var string
     */
    public $validateType;
    protected $_name = [
        'status'         => 'status',
        'validateResult' => 'validateResult',
        'validateType'   => 'validateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->validateResult) {
            $res['validateResult'] = null !== $this->validateResult ? $this->validateResult->toMap() : null;
        }
        if (null !== $this->validateType) {
            $res['validateType'] = $this->validateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['validateResult'])) {
            $model->validateResult = validateResult::fromMap($map['validateResult']);
        }
        if (isset($map['validateType'])) {
            $model->validateType = $map['validateType'];
        }

        return $model;
    }
}
