<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class DownloadFileNameListRequest extends Model
{
    /**
     * @description 空间id
     *
     * @var int
     */
    public $datasetId;

    /**
     * @description 数据集名称
     *
     * @var string
     */
    public $identity;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'identity'  => 'Identity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadFileNameListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }

        return $model;
    }
}
