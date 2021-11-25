<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetOfficeEditURLRequest extends Model
{
    /**
     * @var string
     */
    public $fileID;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $srcType;

    /**
     * @var string
     */
    public $srcUri;

    /**
     * @var string
     */
    public $tgtUri;

    /**
     * @var string
     */
    public $userID;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'fileID'          => 'FileID',
        'fileName'        => 'FileName',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'project'         => 'Project',
        'srcType'         => 'SrcType',
        'srcUri'          => 'SrcUri',
        'tgtUri'          => 'TgtUri',
        'userID'          => 'UserID',
        'userName'        => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileID) {
            $res['FileID'] = $this->fileID;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->srcUri) {
            $res['SrcUri'] = $this->srcUri;
        }
        if (null !== $this->tgtUri) {
            $res['TgtUri'] = $this->tgtUri;
        }
        if (null !== $this->userID) {
            $res['UserID'] = $this->userID;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOfficeEditURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileID'])) {
            $model->fileID = $map['FileID'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['SrcUri'])) {
            $model->srcUri = $map['SrcUri'];
        }
        if (isset($map['TgtUri'])) {
            $model->tgtUri = $map['TgtUri'];
        }
        if (isset($map['UserID'])) {
            $model->userID = $map['UserID'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
