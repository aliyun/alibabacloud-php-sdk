<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ShrinkNodeRequest extends Model
{
    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $ignoreStatus;
    protected $_name = [
        'nodeType'     => 'nodeType',
        'clientToken'  => 'clientToken',
        'ignoreStatus' => 'ignoreStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->ignoreStatus) {
            $res['ignoreStatus'] = $this->ignoreStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ShrinkNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['ignoreStatus'])) {
            $model->ignoreStatus = $map['ignoreStatus'];
        }

        return $model;
    }
}
