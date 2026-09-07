<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models\ListTenantAppResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $adminTag;

    /**
     * @var string
     */
    public $appAdminTag;

    /**
     * @var string
     */
    public $appRegInfo;

    /**
     * @var string[]
     */
    public $appTag;

    /**
     * @var string
     */
    public $appUid;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var bool
     */
    public $autoDeleteFlag;

    /**
     * @var bool
     */
    public $autoInstallFlag;

    /**
     * @var string
     */
    public $autoInstallType;

    /**
     * @var int
     */
    public $autoInstallmentType;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $clusterUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $developer;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $distributeType;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $fileRealName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasCert;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var string
     */
    public $iconUrlInternal;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $install;

    /**
     * @var int
     */
    public $installMode;

    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var string
     */
    public $isFree;

    /**
     * @var bool
     */
    public $isGame;

    /**
     * @var int
     */
    public $isWhiteList;

    /**
     * @var string
     */
    public $itemCode;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $licenseType;

    /**
     * @var string
     */
    public $manageCateEnName;

    /**
     * @var int
     */
    public $manageCateId;

    /**
     * @var string
     */
    public $manageCateName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $originAppType;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $ownerOs;

    /**
     * @var int
     */
    public $paymentType;

    /**
     * @var string
     */
    public $price;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $publishDate;

    /**
     * @var string
     */
    public $publishType;

    /**
     * @var int
     */
    public $sandboxMode;

    /**
     * @var string
     */
    public $searchTag;

    /**
     * @var int
     */
    public $silenceDeleteFlag;

    /**
     * @var string
     */
    public $silenceDeleteParam;

    /**
     * @var int
     */
    public $silenceFlag;

    /**
     * @var string
     */
    public $silenceParam;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subAppType;

    /**
     * @var string
     */
    public $subSourceType;

    /**
     * @var int
     */
    public $subscribeCount;

    /**
     * @var int
     */
    public $supplierId;

    /**
     * @var string[]
     */
    public $userTag;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionName;

    /**
     * @var string
     */
    public $wamFileName;

    /**
     * @var string
     */
    public $wamFilePath;

    /**
     * @var string
     */
    public $wamFileRealName;

    /**
     * @var int
     */
    public $wamFileSize;
    protected $_name = [
        'adminTag' => 'AdminTag',
        'appAdminTag' => 'AppAdminTag',
        'appRegInfo' => 'AppRegInfo',
        'appTag' => 'AppTag',
        'appUid' => 'AppUid',
        'authType' => 'AuthType',
        'autoDeleteFlag' => 'AutoDeleteFlag',
        'autoInstallFlag' => 'AutoInstallFlag',
        'autoInstallType' => 'AutoInstallType',
        'autoInstallmentType' => 'AutoInstallmentType',
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'clusterUid' => 'ClusterUid',
        'description' => 'Description',
        'developer' => 'Developer',
        'discountPrice' => 'DiscountPrice',
        'distributeType' => 'DistributeType',
        'expireTime' => 'ExpireTime',
        'extend' => 'Extend',
        'fileName' => 'FileName',
        'filePath' => 'FilePath',
        'fileRealName' => 'FileRealName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'hasCert' => 'HasCert',
        'iconUrl' => 'IconUrl',
        'iconUrlInternal' => 'IconUrlInternal',
        'id' => 'Id',
        'install' => 'Install',
        'installMode' => 'InstallMode',
        'isAdmin' => 'IsAdmin',
        'isFree' => 'IsFree',
        'isGame' => 'IsGame',
        'isWhiteList' => 'IsWhiteList',
        'itemCode' => 'ItemCode',
        'labels' => 'Labels',
        'licenseType' => 'LicenseType',
        'manageCateEnName' => 'ManageCateEnName',
        'manageCateId' => 'ManageCateId',
        'manageCateName' => 'ManageCateName',
        'name' => 'Name',
        'originAppType' => 'OriginAppType',
        'originalPrice' => 'OriginalPrice',
        'osType' => 'OsType',
        'ownerOs' => 'OwnerOs',
        'paymentType' => 'PaymentType',
        'price' => 'Price',
        'priority' => 'Priority',
        'publishDate' => 'PublishDate',
        'publishType' => 'PublishType',
        'sandboxMode' => 'SandboxMode',
        'searchTag' => 'SearchTag',
        'silenceDeleteFlag' => 'SilenceDeleteFlag',
        'silenceDeleteParam' => 'SilenceDeleteParam',
        'silenceFlag' => 'SilenceFlag',
        'silenceParam' => 'SilenceParam',
        'size' => 'Size',
        'sourceType' => 'SourceType',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'subAppType' => 'SubAppType',
        'subSourceType' => 'SubSourceType',
        'subscribeCount' => 'SubscribeCount',
        'supplierId' => 'SupplierId',
        'userTag' => 'UserTag',
        'version' => 'Version',
        'versionName' => 'VersionName',
        'wamFileName' => 'WamFileName',
        'wamFilePath' => 'WamFilePath',
        'wamFileRealName' => 'WamFileRealName',
        'wamFileSize' => 'WamFileSize',
    ];

    public function validate()
    {
        if (\is_array($this->adminTag)) {
            Model::validateArray($this->adminTag);
        }
        if (\is_array($this->appTag)) {
            Model::validateArray($this->appTag);
        }
        if (\is_array($this->userTag)) {
            Model::validateArray($this->userTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminTag) {
            if (\is_array($this->adminTag)) {
                $res['AdminTag'] = [];
                $n1 = 0;
                foreach ($this->adminTag as $item1) {
                    $res['AdminTag'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appAdminTag) {
            $res['AppAdminTag'] = $this->appAdminTag;
        }

        if (null !== $this->appRegInfo) {
            $res['AppRegInfo'] = $this->appRegInfo;
        }

        if (null !== $this->appTag) {
            if (\is_array($this->appTag)) {
                $res['AppTag'] = [];
                $n1 = 0;
                foreach ($this->appTag as $item1) {
                    $res['AppTag'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->autoDeleteFlag) {
            $res['AutoDeleteFlag'] = $this->autoDeleteFlag;
        }

        if (null !== $this->autoInstallFlag) {
            $res['AutoInstallFlag'] = $this->autoInstallFlag;
        }

        if (null !== $this->autoInstallType) {
            $res['AutoInstallType'] = $this->autoInstallType;
        }

        if (null !== $this->autoInstallmentType) {
            $res['AutoInstallmentType'] = $this->autoInstallmentType;
        }

        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }

        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }

        if (null !== $this->clusterUid) {
            $res['ClusterUid'] = $this->clusterUid;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->developer) {
            $res['Developer'] = $this->developer;
        }

        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }

        if (null !== $this->distributeType) {
            $res['DistributeType'] = $this->distributeType;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->fileRealName) {
            $res['FileRealName'] = $this->fileRealName;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->hasCert) {
            $res['HasCert'] = $this->hasCert;
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        if (null !== $this->iconUrlInternal) {
            $res['IconUrlInternal'] = $this->iconUrlInternal;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->install) {
            $res['Install'] = $this->install;
        }

        if (null !== $this->installMode) {
            $res['InstallMode'] = $this->installMode;
        }

        if (null !== $this->isAdmin) {
            $res['IsAdmin'] = $this->isAdmin;
        }

        if (null !== $this->isFree) {
            $res['IsFree'] = $this->isFree;
        }

        if (null !== $this->isGame) {
            $res['IsGame'] = $this->isGame;
        }

        if (null !== $this->isWhiteList) {
            $res['IsWhiteList'] = $this->isWhiteList;
        }

        if (null !== $this->itemCode) {
            $res['ItemCode'] = $this->itemCode;
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }

        if (null !== $this->manageCateEnName) {
            $res['ManageCateEnName'] = $this->manageCateEnName;
        }

        if (null !== $this->manageCateId) {
            $res['ManageCateId'] = $this->manageCateId;
        }

        if (null !== $this->manageCateName) {
            $res['ManageCateName'] = $this->manageCateName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->originAppType) {
            $res['OriginAppType'] = $this->originAppType;
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->ownerOs) {
            $res['OwnerOs'] = $this->ownerOs;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->publishDate) {
            $res['PublishDate'] = $this->publishDate;
        }

        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }

        if (null !== $this->sandboxMode) {
            $res['SandboxMode'] = $this->sandboxMode;
        }

        if (null !== $this->searchTag) {
            $res['SearchTag'] = $this->searchTag;
        }

        if (null !== $this->silenceDeleteFlag) {
            $res['SilenceDeleteFlag'] = $this->silenceDeleteFlag;
        }

        if (null !== $this->silenceDeleteParam) {
            $res['SilenceDeleteParam'] = $this->silenceDeleteParam;
        }

        if (null !== $this->silenceFlag) {
            $res['SilenceFlag'] = $this->silenceFlag;
        }

        if (null !== $this->silenceParam) {
            $res['SilenceParam'] = $this->silenceParam;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subAppType) {
            $res['SubAppType'] = $this->subAppType;
        }

        if (null !== $this->subSourceType) {
            $res['SubSourceType'] = $this->subSourceType;
        }

        if (null !== $this->subscribeCount) {
            $res['SubscribeCount'] = $this->subscribeCount;
        }

        if (null !== $this->supplierId) {
            $res['SupplierId'] = $this->supplierId;
        }

        if (null !== $this->userTag) {
            if (\is_array($this->userTag)) {
                $res['UserTag'] = [];
                $n1 = 0;
                foreach ($this->userTag as $item1) {
                    $res['UserTag'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        if (null !== $this->wamFileName) {
            $res['WamFileName'] = $this->wamFileName;
        }

        if (null !== $this->wamFilePath) {
            $res['WamFilePath'] = $this->wamFilePath;
        }

        if (null !== $this->wamFileRealName) {
            $res['WamFileRealName'] = $this->wamFileRealName;
        }

        if (null !== $this->wamFileSize) {
            $res['WamFileSize'] = $this->wamFileSize;
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
        if (isset($map['AdminTag'])) {
            if (!empty($map['AdminTag'])) {
                $model->adminTag = [];
                $n1 = 0;
                foreach ($map['AdminTag'] as $item1) {
                    $model->adminTag[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AppAdminTag'])) {
            $model->appAdminTag = $map['AppAdminTag'];
        }

        if (isset($map['AppRegInfo'])) {
            $model->appRegInfo = $map['AppRegInfo'];
        }

        if (isset($map['AppTag'])) {
            if (!empty($map['AppTag'])) {
                $model->appTag = [];
                $n1 = 0;
                foreach ($map['AppTag'] as $item1) {
                    $model->appTag[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['AutoDeleteFlag'])) {
            $model->autoDeleteFlag = $map['AutoDeleteFlag'];
        }

        if (isset($map['AutoInstallFlag'])) {
            $model->autoInstallFlag = $map['AutoInstallFlag'];
        }

        if (isset($map['AutoInstallType'])) {
            $model->autoInstallType = $map['AutoInstallType'];
        }

        if (isset($map['AutoInstallmentType'])) {
            $model->autoInstallmentType = $map['AutoInstallmentType'];
        }

        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }

        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }

        if (isset($map['ClusterUid'])) {
            $model->clusterUid = $map['ClusterUid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Developer'])) {
            $model->developer = $map['Developer'];
        }

        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }

        if (isset($map['DistributeType'])) {
            $model->distributeType = $map['DistributeType'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['FileRealName'])) {
            $model->fileRealName = $map['FileRealName'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HasCert'])) {
            $model->hasCert = $map['HasCert'];
        }

        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        if (isset($map['IconUrlInternal'])) {
            $model->iconUrlInternal = $map['IconUrlInternal'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Install'])) {
            $model->install = $map['Install'];
        }

        if (isset($map['InstallMode'])) {
            $model->installMode = $map['InstallMode'];
        }

        if (isset($map['IsAdmin'])) {
            $model->isAdmin = $map['IsAdmin'];
        }

        if (isset($map['IsFree'])) {
            $model->isFree = $map['IsFree'];
        }

        if (isset($map['IsGame'])) {
            $model->isGame = $map['IsGame'];
        }

        if (isset($map['IsWhiteList'])) {
            $model->isWhiteList = $map['IsWhiteList'];
        }

        if (isset($map['ItemCode'])) {
            $model->itemCode = $map['ItemCode'];
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        if (isset($map['ManageCateEnName'])) {
            $model->manageCateEnName = $map['ManageCateEnName'];
        }

        if (isset($map['ManageCateId'])) {
            $model->manageCateId = $map['ManageCateId'];
        }

        if (isset($map['ManageCateName'])) {
            $model->manageCateName = $map['ManageCateName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OriginAppType'])) {
            $model->originAppType = $map['OriginAppType'];
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['OwnerOs'])) {
            $model->ownerOs = $map['OwnerOs'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['PublishDate'])) {
            $model->publishDate = $map['PublishDate'];
        }

        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }

        if (isset($map['SandboxMode'])) {
            $model->sandboxMode = $map['SandboxMode'];
        }

        if (isset($map['SearchTag'])) {
            $model->searchTag = $map['SearchTag'];
        }

        if (isset($map['SilenceDeleteFlag'])) {
            $model->silenceDeleteFlag = $map['SilenceDeleteFlag'];
        }

        if (isset($map['SilenceDeleteParam'])) {
            $model->silenceDeleteParam = $map['SilenceDeleteParam'];
        }

        if (isset($map['SilenceFlag'])) {
            $model->silenceFlag = $map['SilenceFlag'];
        }

        if (isset($map['SilenceParam'])) {
            $model->silenceParam = $map['SilenceParam'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubAppType'])) {
            $model->subAppType = $map['SubAppType'];
        }

        if (isset($map['SubSourceType'])) {
            $model->subSourceType = $map['SubSourceType'];
        }

        if (isset($map['SubscribeCount'])) {
            $model->subscribeCount = $map['SubscribeCount'];
        }

        if (isset($map['SupplierId'])) {
            $model->supplierId = $map['SupplierId'];
        }

        if (isset($map['UserTag'])) {
            if (!empty($map['UserTag'])) {
                $model->userTag = [];
                $n1 = 0;
                foreach ($map['UserTag'] as $item1) {
                    $model->userTag[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        if (isset($map['WamFileName'])) {
            $model->wamFileName = $map['WamFileName'];
        }

        if (isset($map['WamFilePath'])) {
            $model->wamFilePath = $map['WamFilePath'];
        }

        if (isset($map['WamFileRealName'])) {
            $model->wamFileRealName = $map['WamFileRealName'];
        }

        if (isset($map['WamFileSize'])) {
            $model->wamFileSize = $map['WamFileSize'];
        }

        return $model;
    }
}
