<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemRequest\autoUpgradeConfig;
use AlibabaCloud\SDK\NAS\V20170626\Models\ModifyFileSystemRequest\options;

class ModifyFileSystemRequest extends Model
{
    /**
     * @var autoUpgradeConfig
     */
    public $autoUpgradeConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var options
     */
    public $options;
    protected $_name = [
        'autoUpgradeConfig' => 'AutoUpgradeConfig',
        'description' => 'Description',
        'fileSystemId' => 'FileSystemId',
        'options' => 'Options',
    ];

    public function validate()
    {
        if (null !== $this->autoUpgradeConfig) {
            $this->autoUpgradeConfig->validate();
        }
        if (null !== $this->options) {
            $this->options->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoUpgradeConfig) {
            $res['AutoUpgradeConfig'] = null !== $this->autoUpgradeConfig ? $this->autoUpgradeConfig->toArray($noStream) : $this->autoUpgradeConfig;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toArray($noStream) : $this->options;
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
        if (isset($map['AutoUpgradeConfig'])) {
            $model->autoUpgradeConfig = autoUpgradeConfig::fromMap($map['AutoUpgradeConfig']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
        }

        return $model;
    }
}
