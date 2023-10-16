<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOrderLogisticsListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $fileIdentifier;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $logisticsNo;

    /**
     * @var string
     */
    public $produceOrderId;

    /**
     * @var string
     */
    public $tmIcon;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $tmNumber;
    protected $_name = [
        'bizId'          => 'BizId',
        'fileIdentifier' => 'FileIdentifier',
        'fileType'       => 'FileType',
        'logisticsNo'    => 'LogisticsNo',
        'produceOrderId' => 'ProduceOrderId',
        'tmIcon'         => 'TmIcon',
        'tmName'         => 'TmName',
        'tmNumber'       => 'TmNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->fileIdentifier) {
            $res['FileIdentifier'] = $this->fileIdentifier;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->logisticsNo) {
            $res['LogisticsNo'] = $this->logisticsNo;
        }
        if (null !== $this->produceOrderId) {
            $res['ProduceOrderId'] = $this->produceOrderId;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmNumber) {
            $res['TmNumber'] = $this->tmNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['FileIdentifier'])) {
            $model->fileIdentifier = $map['FileIdentifier'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['LogisticsNo'])) {
            $model->logisticsNo = $map['LogisticsNo'];
        }
        if (isset($map['ProduceOrderId'])) {
            $model->produceOrderId = $map['ProduceOrderId'];
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmNumber'])) {
            $model->tmNumber = $map['TmNumber'];
        }

        return $model;
    }
}
