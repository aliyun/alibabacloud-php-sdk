<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetMcpServerResponseBody\data;

use AlibabaCloud\Dara\Model;

class nacosMcpSyncInfo extends Model
{
    /**
     * @var string
     */
    public $importInstanceId;

    /**
     * @var string
     */
    public $importMcpServerId;

    /**
     * @var string
     */
    public $importNamespace;
    protected $_name = [
        'importInstanceId' => 'importInstanceId',
        'importMcpServerId' => 'importMcpServerId',
        'importNamespace' => 'importNamespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importInstanceId) {
            $res['importInstanceId'] = $this->importInstanceId;
        }

        if (null !== $this->importMcpServerId) {
            $res['importMcpServerId'] = $this->importMcpServerId;
        }

        if (null !== $this->importNamespace) {
            $res['importNamespace'] = $this->importNamespace;
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
        if (isset($map['importInstanceId'])) {
            $model->importInstanceId = $map['importInstanceId'];
        }

        if (isset($map['importMcpServerId'])) {
            $model->importMcpServerId = $map['importMcpServerId'];
        }

        if (isset($map['importNamespace'])) {
            $model->importNamespace = $map['importNamespace'];
        }

        return $model;
    }
}
