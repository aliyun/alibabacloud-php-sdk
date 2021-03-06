<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\InsertDeployGroupResponseBody\deployGroupEntity;
use AlibabaCloud\Tea\Model;

class InsertDeployGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var deployGroupEntity
     */
    public $deployGroupEntity;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'code'              => 'Code',
        'deployGroupEntity' => 'DeployGroupEntity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->deployGroupEntity) {
            $res['DeployGroupEntity'] = null !== $this->deployGroupEntity ? $this->deployGroupEntity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertDeployGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DeployGroupEntity'])) {
            $model->deployGroupEntity = deployGroupEntity::fromMap($map['DeployGroupEntity']);
        }

        return $model;
    }
}
