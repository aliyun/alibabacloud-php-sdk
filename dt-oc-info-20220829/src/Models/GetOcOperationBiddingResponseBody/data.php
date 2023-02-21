<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationBiddingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentEntName;

    /**
     * @var string
     */
    public $bidIndustry;

    /**
     * @var string
     */
    public $bidTitle;

    /**
     * @var string
     */
    public $bidType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $infoType;

    /**
     * @example “”
     *
     * @var string
     */
    public $openingTime;

    /**
     * @example “”
     *
     * @var string
     */
    public $projectAmount;

    /**
     * @example “”
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 91130983MA08JE8318\t91130983398899748J\t91130983MA08GQLM67
     *
     * @var string
     */
    public $projectNum;

    /**
     * @example 2021-05-19
     *
     * @var string
     */
    public $publicDate;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $tenderEntName;

    /**
     * @var string
     */
    public $winnerEntName;
    protected $_name = [
        'agentEntName'  => 'AgentEntName',
        'bidIndustry'   => 'BidIndustry',
        'bidTitle'      => 'BidTitle',
        'bidType'       => 'BidType',
        'content'       => 'Content',
        'entName'       => 'EntName',
        'infoType'      => 'InfoType',
        'openingTime'   => 'OpeningTime',
        'projectAmount' => 'ProjectAmount',
        'projectName'   => 'ProjectName',
        'projectNum'    => 'ProjectNum',
        'publicDate'    => 'PublicDate',
        'regionName'    => 'RegionName',
        'subType'       => 'SubType',
        'tenderEntName' => 'TenderEntName',
        'winnerEntName' => 'WinnerEntName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentEntName) {
            $res['AgentEntName'] = $this->agentEntName;
        }
        if (null !== $this->bidIndustry) {
            $res['BidIndustry'] = $this->bidIndustry;
        }
        if (null !== $this->bidTitle) {
            $res['BidTitle'] = $this->bidTitle;
        }
        if (null !== $this->bidType) {
            $res['BidType'] = $this->bidType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->infoType) {
            $res['InfoType'] = $this->infoType;
        }
        if (null !== $this->openingTime) {
            $res['OpeningTime'] = $this->openingTime;
        }
        if (null !== $this->projectAmount) {
            $res['ProjectAmount'] = $this->projectAmount;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectNum) {
            $res['ProjectNum'] = $this->projectNum;
        }
        if (null !== $this->publicDate) {
            $res['PublicDate'] = $this->publicDate;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->tenderEntName) {
            $res['TenderEntName'] = $this->tenderEntName;
        }
        if (null !== $this->winnerEntName) {
            $res['WinnerEntName'] = $this->winnerEntName;
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
        if (isset($map['AgentEntName'])) {
            $model->agentEntName = $map['AgentEntName'];
        }
        if (isset($map['BidIndustry'])) {
            $model->bidIndustry = $map['BidIndustry'];
        }
        if (isset($map['BidTitle'])) {
            $model->bidTitle = $map['BidTitle'];
        }
        if (isset($map['BidType'])) {
            $model->bidType = $map['BidType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['InfoType'])) {
            $model->infoType = $map['InfoType'];
        }
        if (isset($map['OpeningTime'])) {
            $model->openingTime = $map['OpeningTime'];
        }
        if (isset($map['ProjectAmount'])) {
            $model->projectAmount = $map['ProjectAmount'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectNum'])) {
            $model->projectNum = $map['ProjectNum'];
        }
        if (isset($map['PublicDate'])) {
            $model->publicDate = $map['PublicDate'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['TenderEntName'])) {
            $model->tenderEntName = $map['TenderEntName'];
        }
        if (isset($map['WinnerEntName'])) {
            $model->winnerEntName = $map['WinnerEntName'];
        }

        return $model;
    }
}
