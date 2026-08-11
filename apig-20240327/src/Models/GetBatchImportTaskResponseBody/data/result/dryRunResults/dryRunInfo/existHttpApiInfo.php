<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponseBody\data\result\dryRunResults\dryRunInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponseBody\data\result\dryRunResults\dryRunInfo\existHttpApiInfo\versionInfo;

class existHttpApiInfo extends Model
{
    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $httpApiId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var versionInfo
     */
    public $versionInfo;
    protected $_name = [
        'basePath' => 'basePath',
        'gatewayId' => 'gatewayId',
        'httpApiId' => 'httpApiId',
        'name' => 'name',
        'type' => 'type',
        'versionInfo' => 'versionInfo',
    ];

    public function validate()
    {
        if (null !== $this->versionInfo) {
            $this->versionInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['basePath'] = $this->basePath;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->versionInfo) {
            $res['versionInfo'] = null !== $this->versionInfo ? $this->versionInfo->toArray($noStream) : $this->versionInfo;
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
        if (isset($map['basePath'])) {
            $model->basePath = $map['basePath'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['versionInfo'])) {
            $model->versionInfo = versionInfo::fromMap($map['versionInfo']);
        }

        return $model;
    }
}
