<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventQuaraFilesResponseBody;

use AlibabaCloud\Tea\Model;

class quaraFiles extends Model
{
    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-138dsptkrt00u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud desktop.
     *
     * @example test
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The name of the alert.
     *
     * @example WEBSHELL
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The type of the alert.
     *
     * @example WebshellQuaraEventTyp
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the quarantined file.
     *
     * @example 3920516
     *
     * @var int
     */
    public $id;

    /**
     * @description The message-digest algorithm 5 (MD5) value of the quarantined file.
     *
     * @example 5ddebe926acc7ed39a664409bfd0****
     *
     * @var string
     */
    public $md5;

    /**
     * @description The time when the quarantined file was updated.
     *
     * @example 2021-05-18 20:37:08
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The path where the quarantined file is stored on the cloud desktop.
     *
     * @example /var/www/html/webshell-sample-master/others/def.jpg
     *
     * @var string
     */
    public $path;

    /**
     * @description The status of the quarantined file. Valid values:
     *
     *   quaraFailed: The file failed to be quarantined.
     *   quaraDone: The file is quarantined.
     *   quaraing: The file is being quarantined.
     *   rollbackFailed: Quarantine for the file failed to be canceled.
     *   rollbackDone: Quarantine for the file is canceled.
     *   rollbacking: Quarantine for the file is being canceled.
     *
     * @example rollbackDone
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag of the alert.
     *
     * @example 228f890e56eae9eec6a42c7ea801b538
     *
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
