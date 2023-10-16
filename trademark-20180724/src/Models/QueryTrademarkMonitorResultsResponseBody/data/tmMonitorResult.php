<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorResultsResponseBody\data;

use AlibabaCloud\Tea\Model;

class tmMonitorResult extends Model
{
    /**
     * @var string
     */
    public $applyDate;

    /**
     * @var string
     */
    public $chesanEndDate;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var int
     */
    public $dataCreateTime;

    /**
     * @var int
     */
    public $dataUpdateTime;

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
    public $registrationNumber;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $tmImage;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $tmProcedureStatusDesc;

    /**
     * @var string
     */
    public $tmUid;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $wuxiaoEndDate;

    /**
     * @var string
     */
    public $xuzhanEndDate;

    /**
     * @var string
     */
    public $yiyiEndDate;
    protected $_name = [
        'applyDate'             => 'ApplyDate',
        'chesanEndDate'         => 'ChesanEndDate',
        'classification'        => 'Classification',
        'dataCreateTime'        => 'DataCreateTime',
        'dataUpdateTime'        => 'DataUpdateTime',
        'ownerEnName'           => 'OwnerEnName',
        'ownerName'             => 'OwnerName',
        'registrationNumber'    => 'RegistrationNumber',
        'ruleId'                => 'RuleId',
        'tmImage'               => 'TmImage',
        'tmName'                => 'TmName',
        'tmProcedureStatusDesc' => 'TmProcedureStatusDesc',
        'tmUid'                 => 'TmUid',
        'userId'                => 'UserId',
        'wuxiaoEndDate'         => 'WuxiaoEndDate',
        'xuzhanEndDate'         => 'XuzhanEndDate',
        'yiyiEndDate'           => 'YiyiEndDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyDate) {
            $res['ApplyDate'] = $this->applyDate;
        }
        if (null !== $this->chesanEndDate) {
            $res['ChesanEndDate'] = $this->chesanEndDate;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->dataCreateTime) {
            $res['DataCreateTime'] = $this->dataCreateTime;
        }
        if (null !== $this->dataUpdateTime) {
            $res['DataUpdateTime'] = $this->dataUpdateTime;
        }
        if (null !== $this->ownerEnName) {
            $res['OwnerEnName'] = $this->ownerEnName;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->tmImage) {
            $res['TmImage'] = $this->tmImage;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmProcedureStatusDesc) {
            $res['TmProcedureStatusDesc'] = $this->tmProcedureStatusDesc;
        }
        if (null !== $this->tmUid) {
            $res['TmUid'] = $this->tmUid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->wuxiaoEndDate) {
            $res['WuxiaoEndDate'] = $this->wuxiaoEndDate;
        }
        if (null !== $this->xuzhanEndDate) {
            $res['XuzhanEndDate'] = $this->xuzhanEndDate;
        }
        if (null !== $this->yiyiEndDate) {
            $res['YiyiEndDate'] = $this->yiyiEndDate;
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
        if (isset($map['ApplyDate'])) {
            $model->applyDate = $map['ApplyDate'];
        }
        if (isset($map['ChesanEndDate'])) {
            $model->chesanEndDate = $map['ChesanEndDate'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['DataCreateTime'])) {
            $model->dataCreateTime = $map['DataCreateTime'];
        }
        if (isset($map['DataUpdateTime'])) {
            $model->dataUpdateTime = $map['DataUpdateTime'];
        }
        if (isset($map['OwnerEnName'])) {
            $model->ownerEnName = $map['OwnerEnName'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['TmImage'])) {
            $model->tmImage = $map['TmImage'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmProcedureStatusDesc'])) {
            $model->tmProcedureStatusDesc = $map['TmProcedureStatusDesc'];
        }
        if (isset($map['TmUid'])) {
            $model->tmUid = $map['TmUid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WuxiaoEndDate'])) {
            $model->wuxiaoEndDate = $map['WuxiaoEndDate'];
        }
        if (isset($map['XuzhanEndDate'])) {
            $model->xuzhanEndDate = $map['XuzhanEndDate'];
        }
        if (isset($map['YiyiEndDate'])) {
            $model->yiyiEndDate = $map['YiyiEndDate'];
        }

        return $model;
    }
}
