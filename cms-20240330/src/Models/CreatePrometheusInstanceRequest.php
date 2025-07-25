<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceRequest\tags;
use AlibabaCloud\Tea\Model;

class CreatePrometheusInstanceRequest extends Model
{
    /**
     * @example 60
     *
     * @var int
     */
    public $archiveDuration;

    /**
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $authFreeReadPolicy;

    /**
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $authFreeWritePolicy;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableAuthFreeRead;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableAuthFreeWrite;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableAuthToken;

    /**
     * @example POSTPAY
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description This parameter is required.
     *
     * @example name1
     *
     * @var string
     */
    public $prometheusInstanceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 90
     *
     * @var int
     */
    public $storageDuration;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example wokspace1
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'archiveDuration' => 'archiveDuration',
        'authFreeReadPolicy' => 'authFreeReadPolicy',
        'authFreeWritePolicy' => 'authFreeWritePolicy',
        'enableAuthFreeRead' => 'enableAuthFreeRead',
        'enableAuthFreeWrite' => 'enableAuthFreeWrite',
        'enableAuthToken' => 'enableAuthToken',
        'paymentType' => 'paymentType',
        'prometheusInstanceName' => 'prometheusInstanceName',
        'status' => 'status',
        'storageDuration' => 'storageDuration',
        'tags' => 'tags',
        'workspace' => 'workspace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveDuration) {
            $res['archiveDuration'] = $this->archiveDuration;
        }
        if (null !== $this->authFreeReadPolicy) {
            $res['authFreeReadPolicy'] = $this->authFreeReadPolicy;
        }
        if (null !== $this->authFreeWritePolicy) {
            $res['authFreeWritePolicy'] = $this->authFreeWritePolicy;
        }
        if (null !== $this->enableAuthFreeRead) {
            $res['enableAuthFreeRead'] = $this->enableAuthFreeRead;
        }
        if (null !== $this->enableAuthFreeWrite) {
            $res['enableAuthFreeWrite'] = $this->enableAuthFreeWrite;
        }
        if (null !== $this->enableAuthToken) {
            $res['enableAuthToken'] = $this->enableAuthToken;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->prometheusInstanceName) {
            $res['prometheusInstanceName'] = $this->prometheusInstanceName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->storageDuration) {
            $res['storageDuration'] = $this->storageDuration;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePrometheusInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['archiveDuration'])) {
            $model->archiveDuration = $map['archiveDuration'];
        }
        if (isset($map['authFreeReadPolicy'])) {
            $model->authFreeReadPolicy = $map['authFreeReadPolicy'];
        }
        if (isset($map['authFreeWritePolicy'])) {
            $model->authFreeWritePolicy = $map['authFreeWritePolicy'];
        }
        if (isset($map['enableAuthFreeRead'])) {
            $model->enableAuthFreeRead = $map['enableAuthFreeRead'];
        }
        if (isset($map['enableAuthFreeWrite'])) {
            $model->enableAuthFreeWrite = $map['enableAuthFreeWrite'];
        }
        if (isset($map['enableAuthToken'])) {
            $model->enableAuthToken = $map['enableAuthToken'];
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['prometheusInstanceName'])) {
            $model->prometheusInstanceName = $map['prometheusInstanceName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['storageDuration'])) {
            $model->storageDuration = $map['storageDuration'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
