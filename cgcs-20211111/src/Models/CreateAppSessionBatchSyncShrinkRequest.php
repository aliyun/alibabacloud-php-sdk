<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateAppSessionBatchSyncShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $appInfosShrink;

    /**
     * @description This parameter is required.
     *
     * @example 6d4d****
     *
     * @var string
     */
    public $batchId;
    protected $_name = [
        'appInfosShrink' => 'AppInfos',
        'batchId'        => 'BatchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfosShrink) {
            $res['AppInfos'] = $this->appInfosShrink;
        }
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSessionBatchSyncShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInfos'])) {
            $model->appInfosShrink = $map['AppInfos'];
        }
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        return $model;
    }
}
