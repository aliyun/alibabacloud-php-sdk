<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;

class ModifyQosPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $federationId;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $inputRegionId;

    /**
     * @var int
     */
    public $maxIOBandWidth;

    /**
     * @var int
     */
    public $maxIOps;

    /**
     * @var int
     */
    public $maxMetaQps;

    /**
     * @var string
     */
    public $qosPolicyId;
    protected $_name = [
        'description' => 'Description',
        'federationId' => 'FederationId',
        'fileSystemId' => 'FileSystemId',
        'inputRegionId' => 'InputRegionId',
        'maxIOBandWidth' => 'MaxIOBandWidth',
        'maxIOps' => 'MaxIOps',
        'maxMetaQps' => 'MaxMetaQps',
        'qosPolicyId' => 'QosPolicyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->federationId) {
            $res['FederationId'] = $this->federationId;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }

        if (null !== $this->maxIOBandWidth) {
            $res['MaxIOBandWidth'] = $this->maxIOBandWidth;
        }

        if (null !== $this->maxIOps) {
            $res['MaxIOps'] = $this->maxIOps;
        }

        if (null !== $this->maxMetaQps) {
            $res['MaxMetaQps'] = $this->maxMetaQps;
        }

        if (null !== $this->qosPolicyId) {
            $res['QosPolicyId'] = $this->qosPolicyId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FederationId'])) {
            $model->federationId = $map['FederationId'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }

        if (isset($map['MaxIOBandWidth'])) {
            $model->maxIOBandWidth = $map['MaxIOBandWidth'];
        }

        if (isset($map['MaxIOps'])) {
            $model->maxIOps = $map['MaxIOps'];
        }

        if (isset($map['MaxMetaQps'])) {
            $model->maxMetaQps = $map['MaxMetaQps'];
        }

        if (isset($map['QosPolicyId'])) {
            $model->qosPolicyId = $map['QosPolicyId'];
        }

        return $model;
    }
}
