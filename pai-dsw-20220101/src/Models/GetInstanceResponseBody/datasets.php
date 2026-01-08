<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class datasets extends Model
{
    /**
     * @var string
     */
    public $actualMountAccess;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetVersion;

    /**
     * @var bool
     */
    public $dynamic;

    /**
     * @var string
     */
    public $mountAccess;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $optionType;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'actualMountAccess' => 'ActualMountAccess',
        'datasetId' => 'DatasetId',
        'datasetVersion' => 'DatasetVersion',
        'dynamic' => 'Dynamic',
        'mountAccess' => 'MountAccess',
        'mountPath' => 'MountPath',
        'optionType' => 'OptionType',
        'options' => 'Options',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualMountAccess) {
            $res['ActualMountAccess'] = $this->actualMountAccess;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = $this->datasetVersion;
        }

        if (null !== $this->dynamic) {
            $res['Dynamic'] = $this->dynamic;
        }

        if (null !== $this->mountAccess) {
            $res['MountAccess'] = $this->mountAccess;
        }

        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->optionType) {
            $res['OptionType'] = $this->optionType;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['ActualMountAccess'])) {
            $model->actualMountAccess = $map['ActualMountAccess'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = $map['DatasetVersion'];
        }

        if (isset($map['Dynamic'])) {
            $model->dynamic = $map['Dynamic'];
        }

        if (isset($map['MountAccess'])) {
            $model->mountAccess = $map['MountAccess'];
        }

        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['OptionType'])) {
            $model->optionType = $map['OptionType'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
