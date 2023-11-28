<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionResponseBody\result\validateResult;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The error message returned.
     *
     * @var validateResult[]
     */
    public $validateResult;

    /**
     * @description The error code returned if the request failed.
     *
     * @example checkClusterHealth
     *
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
            $res['validateResult'] = [];
            if (null !== $this->validateResult && \is_array($this->validateResult)) {
                $n = 0;
                foreach ($this->validateResult as $item) {
                    $res['validateResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['validateResult'])) {
                $model->validateResult = [];
                $n                     = 0;
                foreach ($map['validateResult'] as $item) {
                    $model->validateResult[$n++] = null !== $item ? validateResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['validateType'])) {
            $model->validateType = $map['validateType'];
        }

        return $model;
    }
}
