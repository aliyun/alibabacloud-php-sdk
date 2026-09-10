<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class ExecWorkflowConnectivityRequest extends Model
{
    /**
     * @var string
     */
    public $dsConfig;

    /**
     * @var string
     */
    public $dsName;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $dsVersion;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isModified;
    protected $_name = [
        'dsConfig' => 'dsConfig',
        'dsName' => 'dsName',
        'dsType' => 'dsType',
        'dsVersion' => 'dsVersion',
        'id' => 'id',
        'isModified' => 'isModified',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dsConfig) {
            $res['dsConfig'] = $this->dsConfig;
        }

        if (null !== $this->dsName) {
            $res['dsName'] = $this->dsName;
        }

        if (null !== $this->dsType) {
            $res['dsType'] = $this->dsType;
        }

        if (null !== $this->dsVersion) {
            $res['dsVersion'] = $this->dsVersion;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isModified) {
            $res['isModified'] = $this->isModified;
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
        if (isset($map['dsConfig'])) {
            $model->dsConfig = $map['dsConfig'];
        }

        if (isset($map['dsName'])) {
            $model->dsName = $map['dsName'];
        }

        if (isset($map['dsType'])) {
            $model->dsType = $map['dsType'];
        }

        if (isset($map['dsVersion'])) {
            $model->dsVersion = $map['dsVersion'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isModified'])) {
            $model->isModified = $map['isModified'];
        }

        return $model;
    }
}
