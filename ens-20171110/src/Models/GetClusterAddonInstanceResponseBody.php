<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetClusterAddonInstanceResponseBody\configSchema;

class GetClusterAddonInstanceResponseBody extends Model
{
    /**
     * @var bool
     */
    public $cleanupCloudResources;

    /**
     * @var configSchema[]
     */
    public $configSchema;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'cleanupCloudResources' => 'CleanupCloudResources',
        'configSchema' => 'ConfigSchema',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->configSchema)) {
            Model::validateArray($this->configSchema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cleanupCloudResources) {
            $res['CleanupCloudResources'] = $this->cleanupCloudResources;
        }

        if (null !== $this->configSchema) {
            if (\is_array($this->configSchema)) {
                $res['ConfigSchema'] = [];
                $n1 = 0;
                foreach ($this->configSchema as $item1) {
                    $res['ConfigSchema'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CleanupCloudResources'])) {
            $model->cleanupCloudResources = $map['CleanupCloudResources'];
        }

        if (isset($map['ConfigSchema'])) {
            if (!empty($map['ConfigSchema'])) {
                $model->configSchema = [];
                $n1 = 0;
                foreach ($map['ConfigSchema'] as $item1) {
                    $model->configSchema[$n1] = configSchema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
