<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class RegisterAIDBClusterCustomModelResponseBody extends Model
{
    /**
     * @var bool
     */
    public $created;

    /**
     * @var string
     */
    public $displayModelName;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'created' => 'Created',
        'displayModelName' => 'DisplayModelName',
        'modelId' => 'ModelId',
        'modelName' => 'ModelName',
        'modelType' => 'ModelType',
        'ossPath' => 'OssPath',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }

        if (null !== $this->displayModelName) {
            $res['DisplayModelName'] = $this->displayModelName;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }

        if (isset($map['DisplayModelName'])) {
            $model->displayModelName = $map['DisplayModelName'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
