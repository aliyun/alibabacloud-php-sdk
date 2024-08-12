<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateLibraryRequest\indexSetting;

use AlibabaCloud\Tea\Model;

class recallStrategy extends Model
{
    /**
     * @example model
     *
     * @var string
     */
    public $documentRankType;

    /**
     * @example 10
     *
     * @var int
     */
    public $limit;
    protected $_name = [
        'documentRankType' => 'documentRankType',
        'limit'            => 'limit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentRankType) {
            $res['documentRankType'] = $this->documentRankType;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recallStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['documentRankType'])) {
            $model->documentRankType = $map['documentRankType'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        return $model;
    }
}
