<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListDeployGroupResponseBody\deployGroupList;
use AlibabaCloud\Tea\Model;

class ListDeployGroupResponseBody extends Model
{
    /**
     * @var deployGroupList
     */
    public $deployGroupList;

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
    protected $_name = [
        'deployGroupList' => 'DeployGroupList',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'code'            => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployGroupList) {
            $res['DeployGroupList'] = null !== $this->deployGroupList ? $this->deployGroupList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeployGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployGroupList'])) {
            $model->deployGroupList = deployGroupList::fromMap($map['DeployGroupList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
