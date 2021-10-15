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
    public $validateType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var validateResult
     */
    public $validateResult;
    protected $_name = [
        'validateType'   => 'validateType',
        'status'         => 'status',
        'validateResult' => 'validateResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->validateType) {
            $res['validateType'] = $this->validateType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->validateResult) {
            $res['validateResult'] = null !== $this->validateResult ? $this->validateResult->toMap() : null;
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
        if (isset($map['validateType'])) {
            $model->validateType = $map['validateType'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['validateResult'])) {
            $model->validateResult = validateResult::fromMap($map['validateResult']);
        }

        return $model;
    }
}
