<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class AgenticFSVolumeConfig extends Model
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
     * @var int
     */
    public $groupID;

    /**
     * @var string
     */
    public $serverAddr;

    /**
     * @var int
     */
    public $userID;
    protected $_name = [
        'accessPointID' => 'accessPointID',
        'agenticSpaceID' => 'agenticSpaceID',
        'fileSystemID' => 'fileSystemID',
        'groupID' => 'groupID',
        'serverAddr' => 'serverAddr',
        'userID' => 'userID',
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

        if (null !== $this->groupID) {
            $res['groupID'] = $this->groupID;
        }

        if (null !== $this->serverAddr) {
            $res['serverAddr'] = $this->serverAddr;
        }

        if (null !== $this->userID) {
            $res['userID'] = $this->userID;
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

        if (isset($map['groupID'])) {
            $model->groupID = $map['groupID'];
        }

        if (isset($map['serverAddr'])) {
            $model->serverAddr = $map['serverAddr'];
        }

        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        return $model;
    }
}
