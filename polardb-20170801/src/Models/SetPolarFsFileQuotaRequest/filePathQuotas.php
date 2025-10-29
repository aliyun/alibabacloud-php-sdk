<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\SetPolarFsFileQuotaRequest;

use AlibabaCloud\Dara\Model;

class filePathQuotas extends Model
{
    /**
     * @var string
     */
    public $filePathId;

    /**
     * @var int
     */
    public $maxDepth;

    /**
     * @var string
     */
    public $quotaIds;

    /**
     * @var string
     */
    public $strategy;
    protected $_name = [
        'filePathId' => 'FilePathId',
        'maxDepth' => 'MaxDepth',
        'quotaIds' => 'QuotaIds',
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePathId) {
            $res['FilePathId'] = $this->filePathId;
        }

        if (null !== $this->maxDepth) {
            $res['MaxDepth'] = $this->maxDepth;
        }

        if (null !== $this->quotaIds) {
            $res['QuotaIds'] = $this->quotaIds;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
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
        if (isset($map['FilePathId'])) {
            $model->filePathId = $map['FilePathId'];
        }

        if (isset($map['MaxDepth'])) {
            $model->maxDepth = $map['MaxDepth'];
        }

        if (isset($map['QuotaIds'])) {
            $model->quotaIds = $map['QuotaIds'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
