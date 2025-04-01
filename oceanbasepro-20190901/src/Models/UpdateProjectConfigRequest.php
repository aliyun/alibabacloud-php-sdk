<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest\commonTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest\fullTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest\incrTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest\reverseIncrTransferConfig;

class UpdateProjectConfigRequest extends Model
{
    /**
     * @var commonTransferConfig
     */
    public $commonTransferConfig;

    /**
     * @var fullTransferConfig
     */
    public $fullTransferConfig;

    /**
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
        'commonTransferConfig' => 'CommonTransferConfig',
        'fullTransferConfig' => 'FullTransferConfig',
        'id' => 'Id',
        'incrTransferConfig' => 'IncrTransferConfig',
        'reverseIncrTransferConfig' => 'ReverseIncrTransferConfig',
    ];

    public function validate()
    {
        if (null !== $this->commonTransferConfig) {
            $this->commonTransferConfig->validate();
        }
        if (null !== $this->fullTransferConfig) {
            $this->fullTransferConfig->validate();
        }
        if (null !== $this->incrTransferConfig) {
            $this->incrTransferConfig->validate();
        }
        if (null !== $this->reverseIncrTransferConfig) {
            $this->reverseIncrTransferConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonTransferConfig) {
            $res['CommonTransferConfig'] = null !== $this->commonTransferConfig ? $this->commonTransferConfig->toArray($noStream) : $this->commonTransferConfig;
        }

        if (null !== $this->fullTransferConfig) {
            $res['FullTransferConfig'] = null !== $this->fullTransferConfig ? $this->fullTransferConfig->toArray($noStream) : $this->fullTransferConfig;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->incrTransferConfig) {
            $res['IncrTransferConfig'] = null !== $this->incrTransferConfig ? $this->incrTransferConfig->toArray($noStream) : $this->incrTransferConfig;
        }

        if (null !== $this->reverseIncrTransferConfig) {
            $res['ReverseIncrTransferConfig'] = null !== $this->reverseIncrTransferConfig ? $this->reverseIncrTransferConfig->toArray($noStream) : $this->reverseIncrTransferConfig;
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
        if (isset($map['CommonTransferConfig'])) {
            $model->commonTransferConfig = commonTransferConfig::fromMap($map['CommonTransferConfig']);
        }

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
