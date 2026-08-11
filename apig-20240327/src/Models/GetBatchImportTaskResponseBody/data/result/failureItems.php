<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class failureItems extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'apiId' => 'apiId',
        'apiName' => 'apiName',
        'errorMessage' => 'errorMessage',
        'fileName' => 'fileName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['apiId'] = $this->apiId;
        }

        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
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
        if (isset($map['apiId'])) {
            $model->apiId = $map['apiId'];
        }

        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        return $model;
    }
}
