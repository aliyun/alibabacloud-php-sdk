<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIpPatentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example “”
     *
     * @var string
     */
    public $agency;

    /**
     * @example “”
     *
     * @var string
     */
    public $agent;

    /**
     * @var string
     */
    public $brief;

    /**
     * @example 6(2006.01)I
     *
     * @var string
     */
    public $cateNum;

    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $inventorList;

    /**
     * @example “”
     *
     * @var string
     */
    public $mainClaim;

    /**
     * @var string
     */
    public $patentName;

    /**
     * @var string
     */
    public $patentStatus;

    /**
     * @var string
     */
    public $patentType;

    /**
     * @var string
     */
    public $patenteeList;

    /**
     * @example “”
     *
     * @var string
     */
    public $prioDate;

    /**
     * @example “”
     *
     * @var string
     */
    public $prioNum;

    /**
     * @example 2020-09-22
     *
     * @var string
     */
    public $publicDate;

    /**
     * @example CN111684990A
     *
     * @var string
     */
    public $publicNum;

    /**
     * @example 2019-03-13
     *
     * @var string
     */
    public $requestDate;

    /**
     * @example CN201910186714.9
     *
     * @var string
     */
    public $requestNum;
    protected $_name = [
        'agency'       => 'Agency',
        'agent'        => 'Agent',
        'brief'        => 'Brief',
        'cateNum'      => 'CateNum',
        'entName'      => 'EntName',
        'inventorList' => 'InventorList',
        'mainClaim'    => 'MainClaim',
        'patentName'   => 'PatentName',
        'patentStatus' => 'PatentStatus',
        'patentType'   => 'PatentType',
        'patenteeList' => 'PatenteeList',
        'prioDate'     => 'PrioDate',
        'prioNum'      => 'PrioNum',
        'publicDate'   => 'PublicDate',
        'publicNum'    => 'PublicNum',
        'requestDate'  => 'RequestDate',
        'requestNum'   => 'RequestNum',
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
        if (null !== $this->agent) {
            $res['Agent'] = $this->agent;
        }
        if (null !== $this->brief) {
            $res['Brief'] = $this->brief;
        }
        if (null !== $this->cateNum) {
            $res['CateNum'] = $this->cateNum;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->inventorList) {
            $res['InventorList'] = $this->inventorList;
        }
        if (null !== $this->mainClaim) {
            $res['MainClaim'] = $this->mainClaim;
        }
        if (null !== $this->patentName) {
            $res['PatentName'] = $this->patentName;
        }
        if (null !== $this->patentStatus) {
            $res['PatentStatus'] = $this->patentStatus;
        }
        if (null !== $this->patentType) {
            $res['PatentType'] = $this->patentType;
        }
        if (null !== $this->patenteeList) {
            $res['PatenteeList'] = $this->patenteeList;
        }
        if (null !== $this->prioDate) {
            $res['PrioDate'] = $this->prioDate;
        }
        if (null !== $this->prioNum) {
            $res['PrioNum'] = $this->prioNum;
        }
        if (null !== $this->publicDate) {
            $res['PublicDate'] = $this->publicDate;
        }
        if (null !== $this->publicNum) {
            $res['PublicNum'] = $this->publicNum;
        }
        if (null !== $this->requestDate) {
            $res['RequestDate'] = $this->requestDate;
        }
        if (null !== $this->requestNum) {
            $res['RequestNum'] = $this->requestNum;
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
        if (isset($map['Agency'])) {
            $model->agency = $map['Agency'];
        }
        if (isset($map['Agent'])) {
            $model->agent = $map['Agent'];
        }
        if (isset($map['Brief'])) {
            $model->brief = $map['Brief'];
        }
        if (isset($map['CateNum'])) {
            $model->cateNum = $map['CateNum'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['InventorList'])) {
            $model->inventorList = $map['InventorList'];
        }
        if (isset($map['MainClaim'])) {
            $model->mainClaim = $map['MainClaim'];
        }
        if (isset($map['PatentName'])) {
            $model->patentName = $map['PatentName'];
        }
        if (isset($map['PatentStatus'])) {
            $model->patentStatus = $map['PatentStatus'];
        }
        if (isset($map['PatentType'])) {
            $model->patentType = $map['PatentType'];
        }
        if (isset($map['PatenteeList'])) {
            $model->patenteeList = $map['PatenteeList'];
        }
        if (isset($map['PrioDate'])) {
            $model->prioDate = $map['PrioDate'];
        }
        if (isset($map['PrioNum'])) {
            $model->prioNum = $map['PrioNum'];
        }
        if (isset($map['PublicDate'])) {
            $model->publicDate = $map['PublicDate'];
        }
        if (isset($map['PublicNum'])) {
            $model->publicNum = $map['PublicNum'];
        }
        if (isset($map['RequestDate'])) {
            $model->requestDate = $map['RequestDate'];
        }
        if (isset($map['RequestNum'])) {
            $model->requestNum = $map['RequestNum'];
        }

        return $model;
    }
}
