<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class backendConfig extends Model
{
    /**
     * @var string
     */
    public $backendId;

    /**
     * @var string
     */
    public $backendName;

    /**
     * @var string
     */
    public $backendType;
    protected $_name = [
        'backendId' => 'BackendId',
        'backendName' => 'BackendName',
        'backendType' => 'BackendType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }

        if (null !== $this->backendName) {
            $res['BackendName'] = $this->backendName;
        }

        if (null !== $this->backendType) {
            $res['BackendType'] = $this->backendType;
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
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }

        if (isset($map['BackendName'])) {
            $model->backendName = $map['BackendName'];
        }

        if (isset($map['BackendType'])) {
            $model->backendType = $map['BackendType'];
        }

        return $model;
    }
}
