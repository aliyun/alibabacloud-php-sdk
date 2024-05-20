<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\GetReserveTaskDetailResponseBody;

use AlibabaCloud\Tea\Model;

class resBatchList extends Model
{
    /**
     * @example 726573XXXX
     *
     * @var string
     */
    public $resBatchId;

    /**
     * @example resBatchId
     *
     * @var string
     */
    public $resBatchTagName;
    protected $_name = [
        'resBatchId'      => 'ResBatchId',
        'resBatchTagName' => 'ResBatchTagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resBatchId) {
            $res['ResBatchId'] = $this->resBatchId;
        }
        if (null !== $this->resBatchTagName) {
            $res['ResBatchTagName'] = $this->resBatchTagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resBatchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResBatchId'])) {
            $model->resBatchId = $map['ResBatchId'];
        }
        if (isset($map['ResBatchTagName'])) {
            $model->resBatchTagName = $map['ResBatchTagName'];
        }

        return $model;
    }
}
