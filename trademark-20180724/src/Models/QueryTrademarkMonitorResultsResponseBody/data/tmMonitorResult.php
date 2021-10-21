<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorResultsResponseBody\data;

use AlibabaCloud\Tea\Model;

class tmMonitorResult extends Model
{
    /**
     * @var string
     */
    public $tmProcedureStatusDesc;

    /**
     * @var string
     */
    public $wuxiaoEndDate;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $ownerEnName;

    /**
     * @var string
     */
    public $tmUid;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var int
     */
    public $dataUpdateTime;

    /**
     * @var string
     */
    public $chesanEndDate;

    /**
     * @var string
     */
    public $xuzhanEndDate;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $registrationNumber;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $tmImage;

    /**
     * @var int
     */
    public $dataCreateTime;

    /**
     * @var string
     */
    public $yiyiEndDate;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $applyDate;
    protected $_name = [
        'tmProcedureStatusDesc' => 'TmProcedureStatusDesc',
        'wuxiaoEndDate'         => 'WuxiaoEndDate',
        'userId'                => 'UserId',
        'ownerEnName'           => 'OwnerEnName',
        'tmUid'                 => 'TmUid',
        'ownerName'             => 'OwnerName',
        'dataUpdateTime'        => 'DataUpdateTime',
        'chesanEndDate'         => 'ChesanEndDate',
        'xuzhanEndDate'         => 'XuzhanEndDate',
        'ruleId'                => 'RuleId',
        'registrationNumber'    => 'RegistrationNumber',
        'tmName'                => 'TmName',
        'tmImage'               => 'TmImage',
        'dataCreateTime'        => 'DataCreateTime',
        'yiyiEndDate'           => 'YiyiEndDate',
        'classification'        => 'Classification',
        'applyDate'             => 'ApplyDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tmProcedureStatusDesc) {
            $res['TmProcedureStatusDesc'] = $this->tmProcedureStatusDesc;
        }
        if (null !== $this->wuxiaoEndDate) {
            $res['WuxiaoEndDate'] = $this->wuxiaoEndDate;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->ownerEnName) {
            $res['OwnerEnName'] = $this->ownerEnName;
        }
        if (null !== $this->tmUid) {
            $res['TmUid'] = $this->tmUid;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->dataUpdateTime) {
            $res['DataUpdateTime'] = $this->dataUpdateTime;
        }
        if (null !== $this->chesanEndDate) {
            $res['ChesanEndDate'] = $this->chesanEndDate;
        }
        if (null !== $this->xuzhanEndDate) {
            $res['XuzhanEndDate'] = $this->xuzhanEndDate;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmImage) {
            $res['TmImage'] = $this->tmImage;
        }
        if (null !== $this->dataCreateTime) {
            $res['DataCreateTime'] = $this->dataCreateTime;
        }
        if (null !== $this->yiyiEndDate) {
            $res['YiyiEndDate'] = $this->yiyiEndDate;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->applyDate) {
            $res['ApplyDate'] = $this->applyDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tmMonitorResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TmProcedureStatusDesc'])) {
            $model->tmProcedureStatusDesc = $map['TmProcedureStatusDesc'];
        }
        if (isset($map['WuxiaoEndDate'])) {
            $model->wuxiaoEndDate = $map['WuxiaoEndDate'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['OwnerEnName'])) {
            $model->ownerEnName = $map['OwnerEnName'];
        }
        if (isset($map['TmUid'])) {
            $model->tmUid = $map['TmUid'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['DataUpdateTime'])) {
            $model->dataUpdateTime = $map['DataUpdateTime'];
        }
        if (isset($map['ChesanEndDate'])) {
            $model->chesanEndDate = $map['ChesanEndDate'];
        }
        if (isset($map['XuzhanEndDate'])) {
            $model->xuzhanEndDate = $map['XuzhanEndDate'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmImage'])) {
            $model->tmImage = $map['TmImage'];
        }
        if (isset($map['DataCreateTime'])) {
            $model->dataCreateTime = $map['DataCreateTime'];
        }
        if (isset($map['YiyiEndDate'])) {
            $model->yiyiEndDate = $map['YiyiEndDate'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['ApplyDate'])) {
            $model->applyDate = $map['ApplyDate'];
        }

        return $model;
    }
}
