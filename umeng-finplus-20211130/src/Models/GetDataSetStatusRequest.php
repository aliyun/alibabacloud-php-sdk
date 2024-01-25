<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130\Models;

use AlibabaCloud\Tea\Model;

class GetDataSetStatusRequest extends Model
{
    /**
     * @var int
     */
    public $dataSetId;
    protected $_name = [
        'dataSetId' => 'dataSetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSetId) {
            $res['dataSetId'] = $this->dataSetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataSetStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSetId'])) {
            $model->dataSetId = $map['dataSetId'];
        }

        return $model;
    }
}
