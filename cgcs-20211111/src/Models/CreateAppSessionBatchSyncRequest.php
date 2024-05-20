<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncRequest\appInfos;
use AlibabaCloud\Tea\Model;

class CreateAppSessionBatchSyncRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var appInfos[]
     */
    public $appInfos;

    /**
     * @description This parameter is required.
     *
     * @example 6d4d****
     *
     * @var string
     */
    public $batchId;
    protected $_name = [
        'appInfos' => 'AppInfos',
        'batchId'  => 'BatchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfos) {
            $res['AppInfos'] = [];
            if (null !== $this->appInfos && \is_array($this->appInfos)) {
                $n = 0;
                foreach ($this->appInfos as $item) {
                    $res['AppInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSessionBatchSyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInfos'])) {
            if (!empty($map['AppInfos'])) {
                $model->appInfos = [];
                $n               = 0;
                foreach ($map['AppInfos'] as $item) {
                    $model->appInfos[$n++] = null !== $item ? appInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        return $model;
    }
}
