<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment;

use AlibabaCloud\Dara\Model;

class dataSources extends Model
{
    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'mountPath' => 'MountPath',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
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
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
