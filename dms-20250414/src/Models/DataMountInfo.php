<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DataMountInfo extends Model
{
    /**
     * @var string
     */
    public $mountFolderName;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'mountFolderName' => 'MountFolderName',
        'ossBucket' => 'OssBucket',
        'prefix' => 'Prefix',
        'readOnly' => 'ReadOnly',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountFolderName) {
            $res['MountFolderName'] = $this->mountFolderName;
        }

        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
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
        if (isset($map['MountFolderName'])) {
            $model->mountFolderName = $map['MountFolderName'];
        }

        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        return $model;
    }
}
