<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkDetailForInnerResponseBody\flowList;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkDetailForInnerResponseBody\noticeList;
use AlibabaCloud\Tea\Model;

class DescribeTrademarkDetailForInnerResponseBody extends Model
{
    /**
     * @var string
     */
    public $agency;

    /**
     * @var string
     */
    public $applyDate;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $exclusiveDateLimit;

    /**
     * @var flowList[]
     */
    public $flowList;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imageElement;

    /**
     * @var string
     */
    public $intlRegDate;

    /**
     * @var string
     */
    public $lastProcedureStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var noticeList[]
     */
    public $noticeList;

    /**
     * @var string
     */
    public $ownerAddress;

    /**
     * @var string
     */
    public $ownerEnAddress;

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
    public $preAnnDate;

    /**
     * @var string
     */
    public $preAnnNum;

    /**
     * @var string
     */
    public $priorityDate;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $productDescription;

    /**
     * @var string
     */
    public $regAnnDate;

    /**
     * @var int
     */
    public $regAnnNum;

    /**
     * @var string
     */
    public $registrationNumber;

    /**
     * @var string
     */
    public $registrationType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $share;

    /**
     * @var string
     */
    public $similarGroup;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subsequentDesignationDate;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'agency'                    => 'Agency',
        'applyDate'                 => 'ApplyDate',
        'classification'            => 'Classification',
        'exclusiveDateLimit'        => 'ExclusiveDateLimit',
        'flowList'                  => 'FlowList',
        'image'                     => 'Image',
        'imageElement'              => 'ImageElement',
        'intlRegDate'               => 'IntlRegDate',
        'lastProcedureStatus'       => 'LastProcedureStatus',
        'name'                      => 'Name',
        'noticeList'                => 'NoticeList',
        'ownerAddress'              => 'OwnerAddress',
        'ownerEnAddress'            => 'OwnerEnAddress',
        'ownerEnName'               => 'OwnerEnName',
        'ownerName'                 => 'OwnerName',
        'preAnnDate'                => 'PreAnnDate',
        'preAnnNum'                 => 'PreAnnNum',
        'priorityDate'              => 'PriorityDate',
        'product'                   => 'Product',
        'productDescription'        => 'ProductDescription',
        'regAnnDate'                => 'RegAnnDate',
        'regAnnNum'                 => 'RegAnnNum',
        'registrationNumber'        => 'RegistrationNumber',
        'registrationType'          => 'RegistrationType',
        'requestId'                 => 'RequestId',
        'share'                     => 'Share',
        'similarGroup'              => 'SimilarGroup',
        'status'                    => 'Status',
        'subsequentDesignationDate' => 'SubsequentDesignationDate',
        'uid'                       => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agency) {
            $res['Agency'] = $this->agency;
        }
        if (null !== $this->applyDate) {
            $res['ApplyDate'] = $this->applyDate;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->exclusiveDateLimit) {
            $res['ExclusiveDateLimit'] = $this->exclusiveDateLimit;
        }
        if (null !== $this->flowList) {
            $res['FlowList'] = [];
            if (null !== $this->flowList && \is_array($this->flowList)) {
                $n = 0;
                foreach ($this->flowList as $item) {
                    $res['FlowList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageElement) {
            $res['ImageElement'] = $this->imageElement;
        }
        if (null !== $this->intlRegDate) {
            $res['IntlRegDate'] = $this->intlRegDate;
        }
        if (null !== $this->lastProcedureStatus) {
            $res['LastProcedureStatus'] = $this->lastProcedureStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->noticeList) {
            $res['NoticeList'] = [];
            if (null !== $this->noticeList && \is_array($this->noticeList)) {
                $n = 0;
                foreach ($this->noticeList as $item) {
                    $res['NoticeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerAddress) {
            $res['OwnerAddress'] = $this->ownerAddress;
        }
        if (null !== $this->ownerEnAddress) {
            $res['OwnerEnAddress'] = $this->ownerEnAddress;
        }
        if (null !== $this->ownerEnName) {
            $res['OwnerEnName'] = $this->ownerEnName;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->preAnnDate) {
            $res['PreAnnDate'] = $this->preAnnDate;
        }
        if (null !== $this->preAnnNum) {
            $res['PreAnnNum'] = $this->preAnnNum;
        }
        if (null !== $this->priorityDate) {
            $res['PriorityDate'] = $this->priorityDate;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->productDescription) {
            $res['ProductDescription'] = $this->productDescription;
        }
        if (null !== $this->regAnnDate) {
            $res['RegAnnDate'] = $this->regAnnDate;
        }
        if (null !== $this->regAnnNum) {
            $res['RegAnnNum'] = $this->regAnnNum;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }
        if (null !== $this->registrationType) {
            $res['RegistrationType'] = $this->registrationType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->share) {
            $res['Share'] = $this->share;
        }
        if (null !== $this->similarGroup) {
            $res['SimilarGroup'] = $this->similarGroup;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subsequentDesignationDate) {
            $res['SubsequentDesignationDate'] = $this->subsequentDesignationDate;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrademarkDetailForInnerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Agency'])) {
            $model->agency = $map['Agency'];
        }
        if (isset($map['ApplyDate'])) {
            $model->applyDate = $map['ApplyDate'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['ExclusiveDateLimit'])) {
            $model->exclusiveDateLimit = $map['ExclusiveDateLimit'];
        }
        if (isset($map['FlowList'])) {
            if (!empty($map['FlowList'])) {
                $model->flowList = [];
                $n               = 0;
                foreach ($map['FlowList'] as $item) {
                    $model->flowList[$n++] = null !== $item ? flowList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageElement'])) {
            $model->imageElement = $map['ImageElement'];
        }
        if (isset($map['IntlRegDate'])) {
            $model->intlRegDate = $map['IntlRegDate'];
        }
        if (isset($map['LastProcedureStatus'])) {
            $model->lastProcedureStatus = $map['LastProcedureStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NoticeList'])) {
            if (!empty($map['NoticeList'])) {
                $model->noticeList = [];
                $n                 = 0;
                foreach ($map['NoticeList'] as $item) {
                    $model->noticeList[$n++] = null !== $item ? noticeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerAddress'])) {
            $model->ownerAddress = $map['OwnerAddress'];
        }
        if (isset($map['OwnerEnAddress'])) {
            $model->ownerEnAddress = $map['OwnerEnAddress'];
        }
        if (isset($map['OwnerEnName'])) {
            $model->ownerEnName = $map['OwnerEnName'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['PreAnnDate'])) {
            $model->preAnnDate = $map['PreAnnDate'];
        }
        if (isset($map['PreAnnNum'])) {
            $model->preAnnNum = $map['PreAnnNum'];
        }
        if (isset($map['PriorityDate'])) {
            $model->priorityDate = $map['PriorityDate'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['ProductDescription'])) {
            $model->productDescription = $map['ProductDescription'];
        }
        if (isset($map['RegAnnDate'])) {
            $model->regAnnDate = $map['RegAnnDate'];
        }
        if (isset($map['RegAnnNum'])) {
            $model->regAnnNum = $map['RegAnnNum'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }
        if (isset($map['RegistrationType'])) {
            $model->registrationType = $map['RegistrationType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Share'])) {
            $model->share = $map['Share'];
        }
        if (isset($map['SimilarGroup'])) {
            $model->similarGroup = $map['SimilarGroup'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubsequentDesignationDate'])) {
            $model->subsequentDesignationDate = $map['SubsequentDesignationDate'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
