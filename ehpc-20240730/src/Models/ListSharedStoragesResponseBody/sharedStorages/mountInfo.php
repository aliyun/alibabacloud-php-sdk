<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSharedStoragesResponseBody\sharedStorages;

use AlibabaCloud\Dara\Model;

class mountInfo extends Model
{
    /**
     * @var string
     */
    public $mountDirectory;
    /**
     * @var string
     */
    public $mountOptions;
    /**
     * @var string
     */
    public $mountTarget;
    /**
     * @var string
     */
    public $protocolType;
    /**
     * @var string
     */
    public $storageDirectory;
    protected $_name = [
        'mountDirectory'   => 'MountDirectory',
        'mountOptions'     => 'MountOptions',
        'mountTarget'      => 'MountTarget',
        'protocolType'     => 'ProtocolType',
        'storageDirectory' => 'StorageDirectory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountDirectory) {
            $res['MountDirectory'] = $this->mountDirectory;
        }

        if (null !== $this->mountOptions) {
            $res['MountOptions'] = $this->mountOptions;
        }

        if (null !== $this->mountTarget) {
            $res['MountTarget'] = $this->mountTarget;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->storageDirectory) {
            $res['StorageDirectory'] = $this->storageDirectory;
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
        if (isset($map['MountDirectory'])) {
            $model->mountDirectory = $map['MountDirectory'];
        }

        if (isset($map['MountOptions'])) {
            $model->mountOptions = $map['MountOptions'];
        }

        if (isset($map['MountTarget'])) {
            $model->mountTarget = $map['MountTarget'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['StorageDirectory'])) {
            $model->storageDirectory = $map['StorageDirectory'];
        }

        return $model;
    }
}
