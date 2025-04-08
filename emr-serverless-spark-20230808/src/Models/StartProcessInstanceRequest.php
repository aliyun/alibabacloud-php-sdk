<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class StartProcessInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var bool
     */
    public $isProd;

    /**
     * @var int
     */
    public $processDefinitionCode;

    /**
     * @var string
     */
    public $productNamespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $runtimeQueue;

    /**
     * @var string
     */
    public $versionHashCode;

    /**
     * @var int
     */
    public $versionNumber;
    protected $_name = [
        'action' => 'action',
        'comments' => 'comments',
        'email' => 'email',
        'interval' => 'interval',
        'isProd' => 'isProd',
        'processDefinitionCode' => 'processDefinitionCode',
        'productNamespace' => 'productNamespace',
        'regionId' => 'regionId',
        'runtimeQueue' => 'runtimeQueue',
        'versionHashCode' => 'versionHashCode',
        'versionNumber' => 'versionNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->comments) {
            $res['comments'] = $this->comments;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['comments'])) {
            $model->comments = $map['comments'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }

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
