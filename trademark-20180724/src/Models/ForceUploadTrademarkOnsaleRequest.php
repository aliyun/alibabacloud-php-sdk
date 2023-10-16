<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class ForceUploadTrademarkOnsaleRequest extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $classificationCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $ownerEnName;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $regAnnDate;

    /**
     * @var string
     */
    public $secondaryClassification;

    /**
     * @var string
     */
    public $thirdClassification;

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

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'beginTime'               => 'BeginTime',
        'classificationCode'      => 'ClassificationCode',
        'description'             => 'Description',
        'endTime'                 => 'EndTime',
        'label'                   => 'Label',
        'originalPrice'           => 'OriginalPrice',
        'ownerEnName'             => 'OwnerEnName',
        'ownerName'               => 'OwnerName',
        'reason'                  => 'Reason',
        'regAnnDate'              => 'RegAnnDate',
        'secondaryClassification' => 'SecondaryClassification',
        'thirdClassification'     => 'ThirdClassification',
        'tmIcon'                  => 'TmIcon',
        'tmName'                  => 'TmName',
        'tmNumber'                => 'TmNumber',
        'type'                    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->classificationCode) {
            $res['ClassificationCode'] = $this->classificationCode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->ownerEnName) {
            $res['OwnerEnName'] = $this->ownerEnName;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->regAnnDate) {
            $res['RegAnnDate'] = $this->regAnnDate;
        }
        if (null !== $this->secondaryClassification) {
            $res['SecondaryClassification'] = $this->secondaryClassification;
        }
        if (null !== $this->thirdClassification) {
            $res['ThirdClassification'] = $this->thirdClassification;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ForceUploadTrademarkOnsaleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['ClassificationCode'])) {
            $model->classificationCode = $map['ClassificationCode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['OwnerEnName'])) {
            $model->ownerEnName = $map['OwnerEnName'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RegAnnDate'])) {
            $model->regAnnDate = $map['RegAnnDate'];
        }
        if (isset($map['SecondaryClassification'])) {
            $model->secondaryClassification = $map['SecondaryClassification'];
        }
        if (isset($map['ThirdClassification'])) {
            $model->thirdClassification = $map['ThirdClassification'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
