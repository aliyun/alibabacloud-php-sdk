<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetWebofficeURLRequest extends Model
{
    /**
     * @var string
     */
    public $file;

    /**
     * @var string
     */
    public $fileID;

    /**
     * @var bool
     */
    public $hidecmb;

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
    public $permission;

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
    public $user;

    /**
     * @var string
     */
    public $watermark;
    protected $_name = [
        'file'            => 'File',
        'fileID'          => 'FileID',
        'hidecmb'         => 'Hidecmb',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'permission'      => 'Permission',
        'project'         => 'Project',
        'srcType'         => 'SrcType',
        'user'            => 'User',
        'watermark'       => 'Watermark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->file) {
            $res['File'] = $this->file;
        }
        if (null !== $this->fileID) {
            $res['FileID'] = $this->fileID;
        }
        if (null !== $this->hidecmb) {
            $res['Hidecmb'] = $this->hidecmb;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebofficeURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['File'])) {
            $model->file = $map['File'];
        }
        if (isset($map['FileID'])) {
            $model->fileID = $map['FileID'];
        }
        if (isset($map['Hidecmb'])) {
            $model->hidecmb = $map['Hidecmb'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }

        return $model;
    }
}
