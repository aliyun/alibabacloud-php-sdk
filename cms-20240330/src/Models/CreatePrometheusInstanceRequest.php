<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceRequest\tags;

class CreatePrometheusInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $archiveDuration;

    /**
     * @var string
     */
    public $authFreeReadPolicy;

    /**
     * @var string
     */
    public $authFreeWritePolicy;

    /**
     * @var bool
     */
    public $enableAuthFreeRead;

    /**
     * @var bool
     */
    public $enableAuthFreeWrite;

    /**
     * @var bool
     */
    public $enableAuthToken;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $prometheusInstanceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageDuration;

    /**
     * @var tags[]
     */
    public $tags;

    /**
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

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
