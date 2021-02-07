<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DeployAppEnvRequest extends Model
{
    /**
     * @var string
     */
    public $envId;

    /**
     * @var int
     */
    public $batchSize;

    /**
     * @var int
     */
    public $batchPercent;

    /**
     * @var int
     */
    public $batchInterval;

    /**
     * @var bool
     */
    public $pauseBetweenBatches;

    /**
     * @var string
     */
    public $pkgVersionId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'envId'               => 'EnvId',
        'batchSize'           => 'BatchSize',
        'batchPercent'        => 'BatchPercent',
        'batchInterval'       => 'BatchInterval',
        'pauseBetweenBatches' => 'PauseBetweenBatches',
        'pkgVersionId'        => 'PkgVersionId',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }
        if (null !== $this->batchPercent) {
            $res['BatchPercent'] = $this->batchPercent;
        }
        if (null !== $this->batchInterval) {
            $res['BatchInterval'] = $this->batchInterval;
        }
        if (null !== $this->pauseBetweenBatches) {
            $res['PauseBetweenBatches'] = $this->pauseBetweenBatches;
        }
        if (null !== $this->pkgVersionId) {
            $res['PkgVersionId'] = $this->pkgVersionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployAppEnvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }
        if (isset($map['BatchPercent'])) {
            $model->batchPercent = $map['BatchPercent'];
        }
        if (isset($map['BatchInterval'])) {
            $model->batchInterval = $map['BatchInterval'];
        }
        if (isset($map['PauseBetweenBatches'])) {
            $model->pauseBetweenBatches = $map['PauseBetweenBatches'];
        }
        if (isset($map['PkgVersionId'])) {
            $model->pkgVersionId = $map['PkgVersionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
