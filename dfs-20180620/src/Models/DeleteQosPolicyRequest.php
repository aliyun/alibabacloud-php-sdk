<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class DeleteQosPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $federationId;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $qosPolicyId;
    protected $_name = [
        'federationId' => 'FederationId',
        'fileSystemId' => 'FileSystemId',
        'inputRegionId' => 'InputRegionId',
        'qosPolicyId' => 'QosPolicyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->federationId) {
            $res['FederationId'] = $this->federationId;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->qosPolicyId) {
            $res['QosPolicyId'] = $this->qosPolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQosPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FederationId'])) {
            $model->federationId = $map['FederationId'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['QosPolicyId'])) {
            $model->qosPolicyId = $map['QosPolicyId'];
        }

        return $model;
    }
}
