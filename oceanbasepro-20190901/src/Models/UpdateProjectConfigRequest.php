<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest\fullTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest\incrTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest\reverseIncrTransferConfig;
use AlibabaCloud\Tea\Model;

class UpdateProjectConfigRequest extends Model
{
    /**
     * @var fullTransferConfig
     */
    public $fullTransferConfig;

    /**
     * @description This parameter is required.
     *
     * @example np_fe****
     *
     * @var string
     */
    public $id;

    /**
     * @var incrTransferConfig
     */
    public $incrTransferConfig;

    /**
     * @var reverseIncrTransferConfig
     */
    public $reverseIncrTransferConfig;
    protected $_name = [
        'fullTransferConfig'        => 'FullTransferConfig',
        'id'                        => 'Id',
        'incrTransferConfig'        => 'IncrTransferConfig',
        'reverseIncrTransferConfig' => 'ReverseIncrTransferConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullTransferConfig) {
            $res['FullTransferConfig'] = null !== $this->fullTransferConfig ? $this->fullTransferConfig->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->incrTransferConfig) {
            $res['IncrTransferConfig'] = null !== $this->incrTransferConfig ? $this->incrTransferConfig->toMap() : null;
        }
        if (null !== $this->reverseIncrTransferConfig) {
            $res['ReverseIncrTransferConfig'] = null !== $this->reverseIncrTransferConfig ? $this->reverseIncrTransferConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullTransferConfig'])) {
            $model->fullTransferConfig = fullTransferConfig::fromMap($map['FullTransferConfig']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IncrTransferConfig'])) {
            $model->incrTransferConfig = incrTransferConfig::fromMap($map['IncrTransferConfig']);
        }
        if (isset($map['ReverseIncrTransferConfig'])) {
            $model->reverseIncrTransferConfig = reverseIncrTransferConfig::fromMap($map['ReverseIncrTransferConfig']);
        }

        return $model;
    }
}
