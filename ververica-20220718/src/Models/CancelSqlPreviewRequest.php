<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class CancelSqlPreviewRequest extends Model
{
    /**
     * @var string
     */
    public $queryId;

    /**
     * @var string
     */
    public $sessionClusterName;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'queryId' => 'queryId',
        'sessionClusterName' => 'sessionClusterName',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryId) {
            $res['queryId'] = $this->queryId;
        }

        if (null !== $this->sessionClusterName) {
            $res['sessionClusterName'] = $this->sessionClusterName;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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
        if (isset($map['queryId'])) {
            $model->queryId = $map['queryId'];
        }

        if (isset($map['sessionClusterName'])) {
            $model->sessionClusterName = $map['sessionClusterName'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
