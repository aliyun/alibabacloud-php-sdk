<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventQuaraFilesResponse;

use AlibabaCloud\Tea\Model;

class quaraFiles extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'desktopId'   => 'DesktopId',
        'desktopName' => 'DesktopName',
        'eventName'   => 'EventName',
        'eventType'   => 'EventType',
        'id'          => 'Id',
        'md5'         => 'Md5',
        'modifyTime'  => 'ModifyTime',
        'path'        => 'Path',
        'status'      => 'Status',
        'tag'         => 'Tag',
    ];

    public function validate()
    {
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('desktopName', $this->desktopName, true);
        Model::validateRequired('eventName', $this->eventName, true);
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('md5', $this->md5, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('tag', $this->tag, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quaraFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
