<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\QueryUserDocumentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var int
     */
    public $dataStatus;
    protected $_name = [
        'dataId'     => 'DataId',
        'dataStatus' => 'DataStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->dataStatus) {
            $res['DataStatus'] = $this->dataStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['DataStatus'])) {
            $model->dataStatus = $map['DataStatus'];
        }

        return $model;
    }
}
