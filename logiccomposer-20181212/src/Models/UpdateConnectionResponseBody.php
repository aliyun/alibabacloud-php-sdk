<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UpdateConnectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $definition;
    protected $_name = [
        'connectionName' => 'ConnectionName',
        'connectionId'   => 'ConnectionId',
        'requestId'      => 'RequestId',
        'content'        => 'Content',
        'definition'     => 'Definition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }

        return $model;
    }
}
