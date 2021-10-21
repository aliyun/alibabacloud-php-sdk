<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\supplements;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\supplements\supplements\fileTemplateUrls;
use AlibabaCloud\Tea\Model;

class supplements extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $sbjDeadTime;

    /**
     * @var int
     */
    public $acceptDeadTime;

    /**
     * @var int
     */
    public $sendTime;

    /**
     * @var string
     */
    public $batchNum;

    /**
     * @var int
     */
    public $acceptTime;

    /**
     * @var string
     */
    public $tmNumber;

    /**
     * @var string
     */
    public $uploadFileTemplateUrl;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var fileTemplateUrls
     */
    public $fileTemplateUrls;
    protected $_name = [
        'type'                  => 'Type',
        'operateTime'           => 'OperateTime',
        'serialNumber'          => 'SerialNumber',
        'status'                => 'Status',
        'sbjDeadTime'           => 'SbjDeadTime',
        'acceptDeadTime'        => 'AcceptDeadTime',
        'sendTime'              => 'SendTime',
        'batchNum'              => 'BatchNum',
        'acceptTime'            => 'AcceptTime',
        'tmNumber'              => 'TmNumber',
        'uploadFileTemplateUrl' => 'UploadFileTemplateUrl',
        'content'               => 'Content',
        'id'                    => 'Id',
        'orderId'               => 'OrderId',
        'fileTemplateUrls'      => 'FileTemplateUrls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sbjDeadTime) {
            $res['SbjDeadTime'] = $this->sbjDeadTime;
        }
        if (null !== $this->acceptDeadTime) {
            $res['AcceptDeadTime'] = $this->acceptDeadTime;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }
        if (null !== $this->batchNum) {
            $res['BatchNum'] = $this->batchNum;
        }
        if (null !== $this->acceptTime) {
            $res['AcceptTime'] = $this->acceptTime;
        }
        if (null !== $this->tmNumber) {
            $res['TmNumber'] = $this->tmNumber;
        }
        if (null !== $this->uploadFileTemplateUrl) {
            $res['UploadFileTemplateUrl'] = $this->uploadFileTemplateUrl;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->fileTemplateUrls) {
            $res['FileTemplateUrls'] = null !== $this->fileTemplateUrls ? $this->fileTemplateUrls->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supplements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SbjDeadTime'])) {
            $model->sbjDeadTime = $map['SbjDeadTime'];
        }
        if (isset($map['AcceptDeadTime'])) {
            $model->acceptDeadTime = $map['AcceptDeadTime'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }
        if (isset($map['BatchNum'])) {
            $model->batchNum = $map['BatchNum'];
        }
        if (isset($map['AcceptTime'])) {
            $model->acceptTime = $map['AcceptTime'];
        }
        if (isset($map['TmNumber'])) {
            $model->tmNumber = $map['TmNumber'];
        }
        if (isset($map['UploadFileTemplateUrl'])) {
            $model->uploadFileTemplateUrl = $map['UploadFileTemplateUrl'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['FileTemplateUrls'])) {
            $model->fileTemplateUrls = fileTemplateUrls::fromMap($map['FileTemplateUrls']);
        }

        return $model;
    }
}
