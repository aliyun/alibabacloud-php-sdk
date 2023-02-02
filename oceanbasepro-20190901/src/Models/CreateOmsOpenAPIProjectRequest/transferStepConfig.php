<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectRequest;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectRequest\transferStepConfig\incrSyncStepTransferConfig;
use AlibabaCloud\Tea\Model;

class transferStepConfig extends Model
{
    /**
     * @description Specifies whether to enable full migration.
     *
     * @example false
     *
     * @var bool
     */
    public $enableFullSync;

    /**
     * @description Specifies whether to enable incremental synchronization.
     *
     * @example false
     *
     * @var bool
     */
    public $enableIncrSync;

    /**
     * @description Specifies whether to enable schema synchronization.
     *
     * @example false
     *
     * @var bool
     */
    public $enableStructSync;

    /**
     * @description The settings of incremental synchronization steps.
     *
     * @var incrSyncStepTransferConfig
     */
    public $incrSyncStepTransferConfig;
    protected $_name = [
        'enableFullSync'             => 'EnableFullSync',
        'enableIncrSync'             => 'EnableIncrSync',
        'enableStructSync'           => 'EnableStructSync',
        'incrSyncStepTransferConfig' => 'IncrSyncStepTransferConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableFullSync) {
            $res['EnableFullSync'] = $this->enableFullSync;
        }
        if (null !== $this->enableIncrSync) {
            $res['EnableIncrSync'] = $this->enableIncrSync;
        }
        if (null !== $this->enableStructSync) {
            $res['EnableStructSync'] = $this->enableStructSync;
        }
        if (null !== $this->incrSyncStepTransferConfig) {
            $res['IncrSyncStepTransferConfig'] = null !== $this->incrSyncStepTransferConfig ? $this->incrSyncStepTransferConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transferStepConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableFullSync'])) {
            $model->enableFullSync = $map['EnableFullSync'];
        }
        if (isset($map['EnableIncrSync'])) {
            $model->enableIncrSync = $map['EnableIncrSync'];
        }
        if (isset($map['EnableStructSync'])) {
            $model->enableStructSync = $map['EnableStructSync'];
        }
        if (isset($map['IncrSyncStepTransferConfig'])) {
            $model->incrSyncStepTransferConfig = incrSyncStepTransferConfig::fromMap($map['IncrSyncStepTransferConfig']);
        }

        return $model;
    }
}
