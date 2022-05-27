<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class SetDatasetUserOssPathRequest extends Model
{
    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $userOssUrl;
    protected $_name = [
        'datasetId'  => 'DatasetId',
        'userOssUrl' => 'UserOssUrl',
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
        if (null !== $this->userOssUrl) {
            $res['UserOssUrl'] = $this->userOssUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDatasetUserOssPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['UserOssUrl'])) {
            $model->userOssUrl = $map['UserOssUrl'];
        }

        return $model;
    }
}
