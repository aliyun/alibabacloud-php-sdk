<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models\InnerSandboxVolumeMount\agenticFs;

use AlibabaCloud\Dara\Model;

class mountPoints extends Model
{
    /**
     * @var string
     */
    public $accessPointID;

    /**
     * @var string
     */
    public $agenticSpaceID;

    /**
     * @var string
     */
    public $fileSystemID;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $serverAddr;
    protected $_name = [
        'accessPointID' => 'accessPointID',
        'agenticSpaceID' => 'agenticSpaceID',
        'fileSystemID' => 'fileSystemID',
        'mountDir' => 'mountDir',
        'serverAddr' => 'serverAddr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPointID) {
            $res['accessPointID'] = $this->accessPointID;
        }

        if (null !== $this->agenticSpaceID) {
            $res['agenticSpaceID'] = $this->agenticSpaceID;
        }

        if (null !== $this->fileSystemID) {
            $res['fileSystemID'] = $this->fileSystemID;
        }

        if (null !== $this->mountDir) {
            $res['mountDir'] = $this->mountDir;
        }

        if (null !== $this->serverAddr) {
            $res['serverAddr'] = $this->serverAddr;
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
        if (isset($map['accessPointID'])) {
            $model->accessPointID = $map['accessPointID'];
        }

        if (isset($map['agenticSpaceID'])) {
            $model->agenticSpaceID = $map['agenticSpaceID'];
        }

        if (isset($map['fileSystemID'])) {
            $model->fileSystemID = $map['fileSystemID'];
        }

        if (isset($map['mountDir'])) {
            $model->mountDir = $map['mountDir'];
        }

        if (isset($map['serverAddr'])) {
            $model->serverAddr = $map['serverAddr'];
        }

        return $model;
    }
}
