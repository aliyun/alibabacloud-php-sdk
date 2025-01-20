<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class ModifyAccessPointRequest extends Model
{
    /**
     * @var string
     */
    public $accessGroup;
    /**
     * @var string
     */
    public $accessPointId;
    /**
     * @var string
     */
    public $accessPointName;
    /**
     * @var bool
     */
    public $enabledRam;
    /**
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'accessGroup'     => 'AccessGroup',
        'accessPointId'   => 'AccessPointId',
        'accessPointName' => 'AccessPointName',
        'enabledRam'      => 'EnabledRam',
        'fileSystemId'    => 'FileSystemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = $this->accessGroup;
        }

        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        if (null !== $this->accessPointName) {
            $res['AccessPointName'] = $this->accessPointName;
        }

        if (null !== $this->enabledRam) {
            $res['EnabledRam'] = $this->enabledRam;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
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
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = $map['AccessGroup'];
        }

        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        if (isset($map['AccessPointName'])) {
            $model->accessPointName = $map['AccessPointName'];
        }

        if (isset($map['EnabledRam'])) {
            $model->enabledRam = $map['EnabledRam'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
