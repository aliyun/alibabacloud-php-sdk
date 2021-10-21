<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkResponseBody\data\announcementList;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkResponseBody\data\procedures;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $ownerAddress;

    /**
     * @var string
     */
    public $preAnnDate;

    /**
     * @var string
     */
    public $preAnnNumber;

    /**
     * @var string
     */
    public $intlRegDate;

    /**
     * @var string
     */
    public $share;

    /**
     * @var string
     */
    public $ownerEnName;

    /**
     * @var string
     */
    public $subsequentDesignationDate;

    /**
     * @var string
     */
    public $indexId;

    /**
     * @var string
     */
    public $regAnnNumber;

    /**
     * @var string
     */
    public $registrationNumber;

    /**
     * @var string
     */
    public $secondAnnoType;

    /**
     * @var string
     */
    public $agency;

    /**
     * @var string
     */
    public $ownerEnAddress;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $applyDate;

    /**
     * @var string
     */
    public $priorityDate;

    /**
     * @var string
     */
    public $productDescription;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $secondAnnoNumber;

    /**
     * @var string
     */
    public $registrationType;

    /**
     * @var string
     */
    public $firstAnnoNumber;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $regAnnDate;

    /**
     * @var string
     */
    public $similarGroup;

    /**
     * @var int
     */
    public $onSale;

    /**
     * @var string
     */
    public $exclusiveDateLimit;

    /**
     * @var string
     */
    public $firstAnnoType;

    /**
     * @var string
     */
    public $lastProcedureStatus;

    /**
     * @var string
     */
    public $lawFinalStatus;

    /**
     * @var announcementList[]
     */
    public $announcementList;

    /**
     * @var procedures[]
     */
    public $procedures;
    protected $_name = [
        'status'                    => 'Status',
        'ownerAddress'              => 'OwnerAddress',
        'preAnnDate'                => 'PreAnnDate',
        'preAnnNumber'              => 'PreAnnNumber',
        'intlRegDate'               => 'IntlRegDate',
        'share'                     => 'Share',
        'ownerEnName'               => 'OwnerEnName',
        'subsequentDesignationDate' => 'SubsequentDesignationDate',
        'indexId'                   => 'IndexId',
        'regAnnNumber'              => 'RegAnnNumber',
        'registrationNumber'        => 'RegistrationNumber',
        'secondAnnoType'            => 'SecondAnnoType',
        'agency'                    => 'Agency',
        'ownerEnAddress'            => 'OwnerEnAddress',
        'classification'            => 'Classification',
        'name'                      => 'Name',
        'applyDate'                 => 'ApplyDate',
        'priorityDate'              => 'PriorityDate',
        'productDescription'        => 'ProductDescription',
        'image'                     => 'Image',
        'secondAnnoNumber'          => 'SecondAnnoNumber',
        'registrationType'          => 'RegistrationType',
        'firstAnnoNumber'           => 'FirstAnnoNumber',
        'ownerName'                 => 'OwnerName',
        'regAnnDate'                => 'RegAnnDate',
        'similarGroup'              => 'SimilarGroup',
        'onSale'                    => 'OnSale',
        'exclusiveDateLimit'        => 'ExclusiveDateLimit',
        'firstAnnoType'             => 'FirstAnnoType',
        'lastProcedureStatus'       => 'LastProcedureStatus',
        'lawFinalStatus'            => 'LawFinalStatus',
        'announcementList'          => 'AnnouncementList',
        'procedures'                => 'Procedures',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ownerAddress) {
            $res['OwnerAddress'] = $this->ownerAddress;
        }
        if (null !== $this->preAnnDate) {
            $res['PreAnnDate'] = $this->preAnnDate;
        }
        if (null !== $this->preAnnNumber) {
            $res['PreAnnNumber'] = $this->preAnnNumber;
        }
        if (null !== $this->intlRegDate) {
            $res['IntlRegDate'] = $this->intlRegDate;
        }
        if (null !== $this->share) {
            $res['Share'] = $this->share;
        }
        if (null !== $this->ownerEnName) {
            $res['OwnerEnName'] = $this->ownerEnName;
        }
        if (null !== $this->subsequentDesignationDate) {
            $res['SubsequentDesignationDate'] = $this->subsequentDesignationDate;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->regAnnNumber) {
            $res['RegAnnNumber'] = $this->regAnnNumber;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }
        if (null !== $this->secondAnnoType) {
            $res['SecondAnnoType'] = $this->secondAnnoType;
        }
        if (null !== $this->agency) {
            $res['Agency'] = $this->agency;
        }
        if (null !== $this->ownerEnAddress) {
            $res['OwnerEnAddress'] = $this->ownerEnAddress;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->applyDate) {
            $res['ApplyDate'] = $this->applyDate;
        }
        if (null !== $this->priorityDate) {
            $res['PriorityDate'] = $this->priorityDate;
        }
        if (null !== $this->productDescription) {
            $res['ProductDescription'] = $this->productDescription;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->secondAnnoNumber) {
            $res['SecondAnnoNumber'] = $this->secondAnnoNumber;
        }
        if (null !== $this->registrationType) {
            $res['RegistrationType'] = $this->registrationType;
        }
        if (null !== $this->firstAnnoNumber) {
            $res['FirstAnnoNumber'] = $this->firstAnnoNumber;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->regAnnDate) {
            $res['RegAnnDate'] = $this->regAnnDate;
        }
        if (null !== $this->similarGroup) {
            $res['SimilarGroup'] = $this->similarGroup;
        }
        if (null !== $this->onSale) {
            $res['OnSale'] = $this->onSale;
        }
        if (null !== $this->exclusiveDateLimit) {
            $res['ExclusiveDateLimit'] = $this->exclusiveDateLimit;
        }
        if (null !== $this->firstAnnoType) {
            $res['FirstAnnoType'] = $this->firstAnnoType;
        }
        if (null !== $this->lastProcedureStatus) {
            $res['LastProcedureStatus'] = $this->lastProcedureStatus;
        }
        if (null !== $this->lawFinalStatus) {
            $res['LawFinalStatus'] = $this->lawFinalStatus;
        }
        if (null !== $this->announcementList) {
            $res['AnnouncementList'] = [];
            if (null !== $this->announcementList && \is_array($this->announcementList)) {
                $n = 0;
                foreach ($this->announcementList as $item) {
                    $res['AnnouncementList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->procedures) {
            $res['Procedures'] = [];
            if (null !== $this->procedures && \is_array($this->procedures)) {
                $n = 0;
                foreach ($this->procedures as $item) {
                    $res['Procedures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['OwnerAddress'])) {
            $model->ownerAddress = $map['OwnerAddress'];
        }
        if (isset($map['PreAnnDate'])) {
            $model->preAnnDate = $map['PreAnnDate'];
        }
        if (isset($map['PreAnnNumber'])) {
            $model->preAnnNumber = $map['PreAnnNumber'];
        }
        if (isset($map['IntlRegDate'])) {
            $model->intlRegDate = $map['IntlRegDate'];
        }
        if (isset($map['Share'])) {
            $model->share = $map['Share'];
        }
        if (isset($map['OwnerEnName'])) {
            $model->ownerEnName = $map['OwnerEnName'];
        }
        if (isset($map['SubsequentDesignationDate'])) {
            $model->subsequentDesignationDate = $map['SubsequentDesignationDate'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['RegAnnNumber'])) {
            $model->regAnnNumber = $map['RegAnnNumber'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }
        if (isset($map['SecondAnnoType'])) {
            $model->secondAnnoType = $map['SecondAnnoType'];
        }
        if (isset($map['Agency'])) {
            $model->agency = $map['Agency'];
        }
        if (isset($map['OwnerEnAddress'])) {
            $model->ownerEnAddress = $map['OwnerEnAddress'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ApplyDate'])) {
            $model->applyDate = $map['ApplyDate'];
        }
        if (isset($map['PriorityDate'])) {
            $model->priorityDate = $map['PriorityDate'];
        }
        if (isset($map['ProductDescription'])) {
            $model->productDescription = $map['ProductDescription'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['SecondAnnoNumber'])) {
            $model->secondAnnoNumber = $map['SecondAnnoNumber'];
        }
        if (isset($map['RegistrationType'])) {
            $model->registrationType = $map['RegistrationType'];
        }
        if (isset($map['FirstAnnoNumber'])) {
            $model->firstAnnoNumber = $map['FirstAnnoNumber'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['RegAnnDate'])) {
            $model->regAnnDate = $map['RegAnnDate'];
        }
        if (isset($map['SimilarGroup'])) {
            $model->similarGroup = $map['SimilarGroup'];
        }
        if (isset($map['OnSale'])) {
            $model->onSale = $map['OnSale'];
        }
        if (isset($map['ExclusiveDateLimit'])) {
            $model->exclusiveDateLimit = $map['ExclusiveDateLimit'];
        }
        if (isset($map['FirstAnnoType'])) {
            $model->firstAnnoType = $map['FirstAnnoType'];
        }
        if (isset($map['LastProcedureStatus'])) {
            $model->lastProcedureStatus = $map['LastProcedureStatus'];
        }
        if (isset($map['LawFinalStatus'])) {
            $model->lawFinalStatus = $map['LawFinalStatus'];
        }
        if (isset($map['AnnouncementList'])) {
            if (!empty($map['AnnouncementList'])) {
                $model->announcementList = [];
                $n                       = 0;
                foreach ($map['AnnouncementList'] as $item) {
                    $model->announcementList[$n++] = null !== $item ? announcementList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Procedures'])) {
            if (!empty($map['Procedures'])) {
                $model->procedures = [];
                $n                 = 0;
                foreach ($map['Procedures'] as $item) {
                    $model->procedures[$n++] = null !== $item ? procedures::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
