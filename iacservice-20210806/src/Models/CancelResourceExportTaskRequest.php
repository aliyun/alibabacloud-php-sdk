<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class CancelResourceExportTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ramRole;
    protected $_name = [
        'clientToken' => 'clientToken',
        'ramRole'     => 'ramRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelResourceExportTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }

        return $model;
    }
}
