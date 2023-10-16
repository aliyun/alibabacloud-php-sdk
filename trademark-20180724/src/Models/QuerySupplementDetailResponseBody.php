<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySupplementDetailResponseBody\fileTemplateUrls;
use AlibabaCloud\Tea\Model;

class QuerySupplementDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $acceptDeadTime;

    /**
     * @var int
     */
    public $acceptTime;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var fileTemplateUrls
     */
    public $fileTemplateUrls;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sbjDeadTime;

    /**
     * @var int
     */
    public $sendTime;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tmNumber;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $uploadFileTemplateUrl;
    protected $_name = [
        'acceptDeadTime'        => 'AcceptDeadTime',
        'acceptTime'            => 'AcceptTime',
        'content'               => 'Content',
        'fileName'              => 'FileName',
        'fileTemplateUrls'      => 'FileTemplateUrls',
        'id'                    => 'Id',
        'operateTime'           => 'OperateTime',
        'reason'                => 'Reason',
        'requestId'             => 'RequestId',
        'sbjDeadTime'           => 'SbjDeadTime',
        'sendTime'              => 'SendTime',
        'serialNumber'          => 'SerialNumber',
        'status'                => 'Status',
        'tmNumber'              => 'TmNumber',
        'type'                  => 'Type',
        'uploadFileTemplateUrl' => 'UploadFileTemplateUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptDeadTime) {
            $res['AcceptDeadTime'] = $this->acceptDeadTime;
        }
        if (null !== $this->acceptTime) {
            $res['AcceptTime'] = $this->acceptTime;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileTemplateUrls) {
            $res['FileTemplateUrls'] = null !== $this->fileTemplateUrls ? $this->fileTemplateUrls->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sbjDeadTime) {
            $res['SbjDeadTime'] = $this->sbjDeadTime;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tmNumber) {
            $res['TmNumber'] = $this->tmNumber;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uploadFileTemplateUrl) {
            $res['UploadFileTemplateUrl'] = $this->uploadFileTemplateUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySupplementDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptDeadTime'])) {
            $model->acceptDeadTime = $map['AcceptDeadTime'];
        }
        if (isset($map['AcceptTime'])) {
            $model->acceptTime = $map['AcceptTime'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileTemplateUrls'])) {
            $model->fileTemplateUrls = fileTemplateUrls::fromMap($map['FileTemplateUrls']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SbjDeadTime'])) {
            $model->sbjDeadTime = $map['SbjDeadTime'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TmNumber'])) {
            $model->tmNumber = $map['TmNumber'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UploadFileTemplateUrl'])) {
            $model->uploadFileTemplateUrl = $map['UploadFileTemplateUrl'];
        }

        return $model;
    }
}
