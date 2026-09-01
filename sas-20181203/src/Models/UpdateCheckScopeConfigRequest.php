<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateCheckScopeConfigRequest extends Model
{
    /**
     * @var string
     */
    public $autoConfig;

    /**
     * @var int
     */
    public $autoType;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'autoConfig' => 'AutoConfig',
        'autoType' => 'AutoType',
        'configId' => 'ConfigId',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoConfig) {
            $res['AutoConfig'] = $this->autoConfig;
        }

        if (null !== $this->autoType) {
            $res['AutoType'] = $this->autoType;
        }

        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AutoConfig'])) {
            $model->autoConfig = $map['AutoConfig'];
        }

        if (isset($map['AutoType'])) {
            $model->autoType = $map['AutoType'];
        }

        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
