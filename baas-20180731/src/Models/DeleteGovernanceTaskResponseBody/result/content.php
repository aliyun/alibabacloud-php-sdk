<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DeleteGovernanceTaskResponseBody\result;

use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteGovernanceTaskResponseBody\result\content\addedOrganizations;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteGovernanceTaskResponseBody\result\content\chaincodeSpecPkg;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteGovernanceTaskResponseBody\result\content\ordererConfig;
use AlibabaCloud\SDK\Baas\V20180731\Models\DeleteGovernanceTaskResponseBody\result\content\removedOrganizations;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var addedOrganizations[]
     */
    public $addedOrganizations;

    /**
     * @var chaincodeSpecPkg
     */
    public $chaincodeSpecPkg;

    /**
     * @var ordererConfig
     */
    public $ordererConfig;

    /**
     * @var string
     */
    public $raw;

    /**
     * @var removedOrganizations[]
     */
    public $removedOrganizations;

    /**
     * @var string
     */
    public $rwSets;
    protected $_name = [
        'addedOrganizations'   => 'AddedOrganizations',
        'chaincodeSpecPkg'     => 'ChaincodeSpecPkg',
        'ordererConfig'        => 'OrdererConfig',
        'raw'                  => 'Raw',
        'removedOrganizations' => 'RemovedOrganizations',
        'rwSets'               => 'RwSets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedOrganizations) {
            $res['AddedOrganizations'] = [];
            if (null !== $this->addedOrganizations && \is_array($this->addedOrganizations)) {
                $n = 0;
                foreach ($this->addedOrganizations as $item) {
                    $res['AddedOrganizations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chaincodeSpecPkg) {
            $res['ChaincodeSpecPkg'] = null !== $this->chaincodeSpecPkg ? $this->chaincodeSpecPkg->toMap() : null;
        }
        if (null !== $this->ordererConfig) {
            $res['OrdererConfig'] = null !== $this->ordererConfig ? $this->ordererConfig->toMap() : null;
        }
        if (null !== $this->raw) {
            $res['Raw'] = $this->raw;
        }
        if (null !== $this->removedOrganizations) {
            $res['RemovedOrganizations'] = [];
            if (null !== $this->removedOrganizations && \is_array($this->removedOrganizations)) {
                $n = 0;
                foreach ($this->removedOrganizations as $item) {
                    $res['RemovedOrganizations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rwSets) {
            $res['RwSets'] = $this->rwSets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddedOrganizations'])) {
            if (!empty($map['AddedOrganizations'])) {
                $model->addedOrganizations = [];
                $n                         = 0;
                foreach ($map['AddedOrganizations'] as $item) {
                    $model->addedOrganizations[$n++] = null !== $item ? addedOrganizations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChaincodeSpecPkg'])) {
            $model->chaincodeSpecPkg = chaincodeSpecPkg::fromMap($map['ChaincodeSpecPkg']);
        }
        if (isset($map['OrdererConfig'])) {
            $model->ordererConfig = ordererConfig::fromMap($map['OrdererConfig']);
        }
        if (isset($map['Raw'])) {
            $model->raw = $map['Raw'];
        }
        if (isset($map['RemovedOrganizations'])) {
            if (!empty($map['RemovedOrganizations'])) {
                $model->removedOrganizations = [];
                $n                           = 0;
                foreach ($map['RemovedOrganizations'] as $item) {
                    $model->removedOrganizations[$n++] = null !== $item ? removedOrganizations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RwSets'])) {
            $model->rwSets = $map['RwSets'];
        }

        return $model;
    }
}
