<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InitMultipartFileUploadRequest;

use AlibabaCloud\SDK\Aliding\V20230426\Models\InitMultipartFileUploadRequest\option\preCheckParam;
use AlibabaCloud\Tea\Model;

class option extends Model
{
    /**
     * @var preCheckParam
     */
    public $preCheckParam;

    /**
     * @example ZHANGJIAKOU
     *
     * @var string
     */
    public $preferRegion;

    /**
     * @example DINGTALK
     *
     * @var string
     */
    public $storageDriver;
    protected $_name = [
        'preCheckParam' => 'PreCheckParam',
        'preferRegion' => 'PreferRegion',
        'storageDriver' => 'StorageDriver',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheckParam) {
            $res['PreCheckParam'] = null !== $this->preCheckParam ? $this->preCheckParam->toMap() : null;
        }
        if (null !== $this->preferRegion) {
            $res['PreferRegion'] = $this->preferRegion;
        }
        if (null !== $this->storageDriver) {
            $res['StorageDriver'] = $this->storageDriver;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return option
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheckParam'])) {
            $model->preCheckParam = preCheckParam::fromMap($map['PreCheckParam']);
        }
        if (isset($map['PreferRegion'])) {
            $model->preferRegion = $map['PreferRegion'];
        }
        if (isset($map['StorageDriver'])) {
            $model->storageDriver = $map['StorageDriver'];
        }

        return $model;
    }
}
