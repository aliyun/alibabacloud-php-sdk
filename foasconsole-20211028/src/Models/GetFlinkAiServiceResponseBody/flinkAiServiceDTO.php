<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\GetFlinkAiServiceResponseBody;

use AlibabaCloud\Dara\Model;

class flinkAiServiceDTO extends Model
{
    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $flinkAiInstanceStatus;

    /**
     * @var string
     */
    public $mainInstanceId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $resourceCreateTime;
    protected $_name = [
        'deletionProtection' => 'DeletionProtection',
        'flinkAiInstanceStatus' => 'FlinkAiInstanceStatus',
        'mainInstanceId' => 'MainInstanceId',
        'region' => 'Region',
        'resourceCreateTime' => 'ResourceCreateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->flinkAiInstanceStatus) {
            $res['FlinkAiInstanceStatus'] = $this->flinkAiInstanceStatus;
        }

        if (null !== $this->mainInstanceId) {
            $res['MainInstanceId'] = $this->mainInstanceId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->resourceCreateTime) {
            $res['ResourceCreateTime'] = $this->resourceCreateTime;
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
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['FlinkAiInstanceStatus'])) {
            $model->flinkAiInstanceStatus = $map['FlinkAiInstanceStatus'];
        }

        if (isset($map['MainInstanceId'])) {
            $model->mainInstanceId = $map['MainInstanceId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ResourceCreateTime'])) {
            $model->resourceCreateTime = $map['ResourceCreateTime'];
        }

        return $model;
    }
}
