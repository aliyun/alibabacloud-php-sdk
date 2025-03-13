<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class datasets extends Model
{
    /**
     * @example d-vsqjvsjp4orp5l206u
     *
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetVersion;

    /**
     * @var string
     */
    public $mountAccess;

    /**
     * @example /mnt/data
     *
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
        'datasetId'      => 'DatasetId',
        'datasetVersion' => 'DatasetVersion',
        'mountAccess'    => 'MountAccess',
        'mountPath'      => 'MountPath',
        'optionType'     => 'OptionType',
        'options'        => 'Options',
        'uri'            => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = $this->datasetVersion;
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

    /**
     * @param array $map
     *
     * @return datasets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = $map['DatasetVersion'];
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
