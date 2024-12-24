<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class StartProcessInstanceRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $isProd;

    /**
     * @description This parameter is required.
     *
     * @example 12***********
     *
     * @var int
     */
    public $processDefinitionCode;

    /**
     * @description This parameter is required.
     *
     * @example SS
     *
     * @var string
     */
    public $productNamespace;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example root_queue
     *
     * @var string
     */
    public $runtimeQueue;

    /**
     * @example dh*********
     *
     * @var string
     */
    public $versionHashCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $versionNumber;
    protected $_name = [
        'isProd'                => 'isProd',
        'processDefinitionCode' => 'processDefinitionCode',
        'productNamespace'      => 'productNamespace',
        'regionId'              => 'regionId',
        'runtimeQueue'          => 'runtimeQueue',
        'versionHashCode'       => 'versionHashCode',
        'versionNumber'         => 'versionNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isProd) {
            $res['isProd'] = $this->isProd;
        }
        if (null !== $this->processDefinitionCode) {
            $res['processDefinitionCode'] = $this->processDefinitionCode;
        }
        if (null !== $this->productNamespace) {
            $res['productNamespace'] = $this->productNamespace;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->runtimeQueue) {
            $res['runtimeQueue'] = $this->runtimeQueue;
        }
        if (null !== $this->versionHashCode) {
            $res['versionHashCode'] = $this->versionHashCode;
        }
        if (null !== $this->versionNumber) {
            $res['versionNumber'] = $this->versionNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartProcessInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isProd'])) {
            $model->isProd = $map['isProd'];
        }
        if (isset($map['processDefinitionCode'])) {
            $model->processDefinitionCode = $map['processDefinitionCode'];
        }
        if (isset($map['productNamespace'])) {
            $model->productNamespace = $map['productNamespace'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['runtimeQueue'])) {
            $model->runtimeQueue = $map['runtimeQueue'];
        }
        if (isset($map['versionHashCode'])) {
            $model->versionHashCode = $map['versionHashCode'];
        }
        if (isset($map['versionNumber'])) {
            $model->versionNumber = $map['versionNumber'];
        }

        return $model;
    }
}
