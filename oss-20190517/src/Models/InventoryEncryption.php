<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InventoryEncryption extends Model
{
    /**
     * @var SSEKMS
     */
    public $SSEKMS;

    /**
     * @var SSEOSS
     */
    public $SSEOSS;
    protected $_name = [
        'SSEKMS' => 'SSE-KMS',
        'SSEOSS' => 'SSE-OSS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SSEKMS) {
            $res['SSE-KMS'] = null !== $this->SSEKMS ? $this->SSEKMS->toMap() : null;
        }
        if (null !== $this->SSEOSS) {
            $res['SSE-OSS'] = null !== $this->SSEOSS ? $this->SSEOSS->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InventoryEncryption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SSE-KMS'])) {
            $model->SSEKMS = SSEKMS::fromMap($map['SSE-KMS']);
        }
        if (isset($map['SSE-OSS'])) {
            $model->SSEOSS = SSEOSS::fromMap($map['SSE-OSS']);
        }

        return $model;
    }
}
