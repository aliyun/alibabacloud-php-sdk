<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsWithEventResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsWithEventResponseBody\data\responseData\alertInfoList;

class responseData extends Model
{
    /**
     * @var string
     */
    public $alertDesc;

    /**
     * @var string
     */
    public $alertDescCode;

    /**
     * @var string
     */
    public $alertDescEn;

    /**
     * @var string
     */
    public $alertDetail;

    /**
     * @var alertInfoList[]
     */
    public $alertInfoList;

    /**
     * @var string
     */
    public $alertLevel;

    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $alertNameCode;

    /**
     * @var string
     */
    public $alertNameEn;

    /**
     * @var string
     */
    public $alertSrcProd;

    /**
     * @var string
     */
    public $alertSrcProdModule;

    /**
     * @var string
     */
    public $alertTitle;

    /**
     * @var string
     */
    public $alertTitleEn;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $alertTypeCode;

    /**
     * @var string
     */
    public $alertTypeEn;

    /**
     * @var string
     */
    public $alertUuid;

    /**
     * @var string
     */
    public $assetList;

    /**
     * @var string
     */
    public $attCk;

    /**
     * @var string
     */
    public $cloudCode;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $entityList;

    /**
     * @var string
     */
    public $extendContent;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var string
     */
    public $isDefend;

    /**
     * @var string
     */
    public $logTime;

    /**
     * @var string
     */
    public $logUuid;

    /**
     * @var int
     */
    public $mainUserId;

    /**
     * @var string
     */
    public $occurTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $subUserId;

    /**
     * @var string
     */
    public $subUserName;
    protected $_name = [
        'alertDesc' => 'AlertDesc',
        'alertDescCode' => 'AlertDescCode',
        'alertDescEn' => 'AlertDescEn',
        'alertDetail' => 'AlertDetail',
        'alertInfoList' => 'AlertInfoList',
        'alertLevel' => 'AlertLevel',
        'alertName' => 'AlertName',
        'alertNameCode' => 'AlertNameCode',
        'alertNameEn' => 'AlertNameEn',
        'alertSrcProd' => 'AlertSrcProd',
        'alertSrcProdModule' => 'AlertSrcProdModule',
        'alertTitle' => 'AlertTitle',
        'alertTitleEn' => 'AlertTitleEn',
        'alertType' => 'AlertType',
        'alertTypeCode' => 'AlertTypeCode',
        'alertTypeEn' => 'AlertTypeEn',
        'alertUuid' => 'AlertUuid',
        'assetList' => 'AssetList',
        'attCk' => 'AttCk',
        'cloudCode' => 'CloudCode',
        'endTime' => 'EndTime',
        'entityList' => 'EntityList',
        'extendContent' => 'ExtendContent',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'incidentUuid' => 'IncidentUuid',
        'isDefend' => 'IsDefend',
        'logTime' => 'LogTime',
        'logUuid' => 'LogUuid',
        'mainUserId' => 'MainUserId',
        'occurTime' => 'OccurTime',
        'startTime' => 'StartTime',
        'subUserId' => 'SubUserId',
        'subUserName' => 'SubUserName',
    ];

    public function validate()
    {
        if (\is_array($this->alertInfoList)) {
            Model::validateArray($this->alertInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertDesc) {
            $res['AlertDesc'] = $this->alertDesc;
        }

        if (null !== $this->alertDescCode) {
            $res['AlertDescCode'] = $this->alertDescCode;
        }

        if (null !== $this->alertDescEn) {
            $res['AlertDescEn'] = $this->alertDescEn;
        }

        if (null !== $this->alertDetail) {
            $res['AlertDetail'] = $this->alertDetail;
        }

        if (null !== $this->alertInfoList) {
            if (\is_array($this->alertInfoList)) {
                $res['AlertInfoList'] = [];
                $n1 = 0;
                foreach ($this->alertInfoList as $item1) {
                    $res['AlertInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }

        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }

        if (null !== $this->alertNameCode) {
            $res['AlertNameCode'] = $this->alertNameCode;
        }

        if (null !== $this->alertNameEn) {
            $res['AlertNameEn'] = $this->alertNameEn;
        }

        if (null !== $this->alertSrcProd) {
            $res['AlertSrcProd'] = $this->alertSrcProd;
        }

        if (null !== $this->alertSrcProdModule) {
            $res['AlertSrcProdModule'] = $this->alertSrcProdModule;
        }

        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }

        if (null !== $this->alertTitleEn) {
            $res['AlertTitleEn'] = $this->alertTitleEn;
        }

        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->alertTypeCode) {
            $res['AlertTypeCode'] = $this->alertTypeCode;
        }

        if (null !== $this->alertTypeEn) {
            $res['AlertTypeEn'] = $this->alertTypeEn;
        }

        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }

        if (null !== $this->assetList) {
            $res['AssetList'] = $this->assetList;
        }

        if (null !== $this->attCk) {
            $res['AttCk'] = $this->attCk;
        }

        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->entityList) {
            $res['EntityList'] = $this->entityList;
        }

        if (null !== $this->extendContent) {
            $res['ExtendContent'] = $this->extendContent;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->isDefend) {
            $res['IsDefend'] = $this->isDefend;
        }

        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }

        if (null !== $this->logUuid) {
            $res['LogUuid'] = $this->logUuid;
        }

        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }

        if (null !== $this->occurTime) {
            $res['OccurTime'] = $this->occurTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        if (null !== $this->subUserName) {
            $res['SubUserName'] = $this->subUserName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertDesc'])) {
            $model->alertDesc = $map['AlertDesc'];
        }

        if (isset($map['AlertDescCode'])) {
            $model->alertDescCode = $map['AlertDescCode'];
        }

        if (isset($map['AlertDescEn'])) {
            $model->alertDescEn = $map['AlertDescEn'];
        }

        if (isset($map['AlertDetail'])) {
            $model->alertDetail = $map['AlertDetail'];
        }

        if (isset($map['AlertInfoList'])) {
            if (!empty($map['AlertInfoList'])) {
                $model->alertInfoList = [];
                $n1 = 0;
                foreach ($map['AlertInfoList'] as $item1) {
                    $model->alertInfoList[$n1++] = alertInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }

        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }

        if (isset($map['AlertNameCode'])) {
            $model->alertNameCode = $map['AlertNameCode'];
        }

        if (isset($map['AlertNameEn'])) {
            $model->alertNameEn = $map['AlertNameEn'];
        }

        if (isset($map['AlertSrcProd'])) {
            $model->alertSrcProd = $map['AlertSrcProd'];
        }

        if (isset($map['AlertSrcProdModule'])) {
            $model->alertSrcProdModule = $map['AlertSrcProdModule'];
        }

        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }

        if (isset($map['AlertTitleEn'])) {
            $model->alertTitleEn = $map['AlertTitleEn'];
        }

        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['AlertTypeCode'])) {
            $model->alertTypeCode = $map['AlertTypeCode'];
        }

        if (isset($map['AlertTypeEn'])) {
            $model->alertTypeEn = $map['AlertTypeEn'];
        }

        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }

        if (isset($map['AssetList'])) {
            $model->assetList = $map['AssetList'];
        }

        if (isset($map['AttCk'])) {
            $model->attCk = $map['AttCk'];
        }

        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EntityList'])) {
            $model->entityList = $map['EntityList'];
        }

        if (isset($map['ExtendContent'])) {
            $model->extendContent = $map['ExtendContent'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['IsDefend'])) {
            $model->isDefend = $map['IsDefend'];
        }

        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }

        if (isset($map['LogUuid'])) {
            $model->logUuid = $map['LogUuid'];
        }

        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }

        if (isset($map['OccurTime'])) {
            $model->occurTime = $map['OccurTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        if (isset($map['SubUserName'])) {
            $model->subUserName = $map['SubUserName'];
        }

        return $model;
    }
}
