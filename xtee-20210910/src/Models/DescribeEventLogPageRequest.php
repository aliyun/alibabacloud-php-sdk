<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventLogPageRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $accountIdPRP;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $condition1AL;

    /**
     * @var string
     */
    public $condition2AL;

    /**
     * @var string
     */
    public $condition3AL;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $deviceTypeLRP;

    /**
     * @var string
     */
    public $emailPRP;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $failReasonLRP;

    /**
     * @var string
     */
    public $ipPRP;

    /**
     * @var string
     */
    public $loginResultARP;

    /**
     * @var string
     */
    public $loginTypeLRP;

    /**
     * @var string
     */
    public $macPRP;

    /**
     * @var string
     */
    public $mobilePRP;

    /**
     * @var string
     */
    public $nickNamePRP;

    /**
     * @var string
     */
    public $operateSourceLRP;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $referPRP;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $registerIpPRP;

    /**
     * @var string
     */
    public $reqIdPBS;

    /**
     * @var int
     */
    public $scoreEBS;

    /**
     * @var int
     */
    public $scoreSBS;

    /**
     * @var string
     */
    public $serviceABS;

    /**
     * @var string
     */
    public $tagsLBS;

    /**
     * @var string
     */
    public $umidPDI;

    /**
     * @var string
     */
    public $userAgentPRP;

    /**
     * @var string
     */
    public $userNameTypeLRP;
    protected $_name = [
        'lang'             => 'Lang',
        'accountIdPRP'     => 'accountIdPRP',
        'beginTime'        => 'beginTime',
        'condition1AL'     => 'condition1AL',
        'condition2AL'     => 'condition2AL',
        'condition3AL'     => 'condition3AL',
        'currentPage'      => 'currentPage',
        'deviceTypeLRP'    => 'deviceTypeLRP',
        'emailPRP'         => 'emailPRP',
        'endTime'          => 'endTime',
        'failReasonLRP'    => 'failReasonLRP',
        'ipPRP'            => 'ipPRP',
        'loginResultARP'   => 'loginResultARP',
        'loginTypeLRP'     => 'loginTypeLRP',
        'macPRP'           => 'macPRP',
        'mobilePRP'        => 'mobilePRP',
        'nickNamePRP'      => 'nickNamePRP',
        'operateSourceLRP' => 'operateSourceLRP',
        'pageSize'         => 'pageSize',
        'referPRP'         => 'referPRP',
        'regId'            => 'regId',
        'registerIpPRP'    => 'registerIpPRP',
        'reqIdPBS'         => 'reqIdPBS',
        'scoreEBS'         => 'scoreEBS',
        'scoreSBS'         => 'scoreSBS',
        'serviceABS'       => 'serviceABS',
        'tagsLBS'          => 'tagsLBS',
        'umidPDI'          => 'umidPDI',
        'userAgentPRP'     => 'userAgentPRP',
        'userNameTypeLRP'  => 'userNameTypeLRP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->accountIdPRP) {
            $res['accountIdPRP'] = $this->accountIdPRP;
        }
        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }
        if (null !== $this->condition1AL) {
            $res['condition1AL'] = $this->condition1AL;
        }
        if (null !== $this->condition2AL) {
            $res['condition2AL'] = $this->condition2AL;
        }
        if (null !== $this->condition3AL) {
            $res['condition3AL'] = $this->condition3AL;
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->deviceTypeLRP) {
            $res['deviceTypeLRP'] = $this->deviceTypeLRP;
        }
        if (null !== $this->emailPRP) {
            $res['emailPRP'] = $this->emailPRP;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->failReasonLRP) {
            $res['failReasonLRP'] = $this->failReasonLRP;
        }
        if (null !== $this->ipPRP) {
            $res['ipPRP'] = $this->ipPRP;
        }
        if (null !== $this->loginResultARP) {
            $res['loginResultARP'] = $this->loginResultARP;
        }
        if (null !== $this->loginTypeLRP) {
            $res['loginTypeLRP'] = $this->loginTypeLRP;
        }
        if (null !== $this->macPRP) {
            $res['macPRP'] = $this->macPRP;
        }
        if (null !== $this->mobilePRP) {
            $res['mobilePRP'] = $this->mobilePRP;
        }
        if (null !== $this->nickNamePRP) {
            $res['nickNamePRP'] = $this->nickNamePRP;
        }
        if (null !== $this->operateSourceLRP) {
            $res['operateSourceLRP'] = $this->operateSourceLRP;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->referPRP) {
            $res['referPRP'] = $this->referPRP;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->registerIpPRP) {
            $res['registerIpPRP'] = $this->registerIpPRP;
        }
        if (null !== $this->reqIdPBS) {
            $res['reqIdPBS'] = $this->reqIdPBS;
        }
        if (null !== $this->scoreEBS) {
            $res['scoreEBS'] = $this->scoreEBS;
        }
        if (null !== $this->scoreSBS) {
            $res['scoreSBS'] = $this->scoreSBS;
        }
        if (null !== $this->serviceABS) {
            $res['serviceABS'] = $this->serviceABS;
        }
        if (null !== $this->tagsLBS) {
            $res['tagsLBS'] = $this->tagsLBS;
        }
        if (null !== $this->umidPDI) {
            $res['umidPDI'] = $this->umidPDI;
        }
        if (null !== $this->userAgentPRP) {
            $res['userAgentPRP'] = $this->userAgentPRP;
        }
        if (null !== $this->userNameTypeLRP) {
            $res['userNameTypeLRP'] = $this->userNameTypeLRP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventLogPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['accountIdPRP'])) {
            $model->accountIdPRP = $map['accountIdPRP'];
        }
        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }
        if (isset($map['condition1AL'])) {
            $model->condition1AL = $map['condition1AL'];
        }
        if (isset($map['condition2AL'])) {
            $model->condition2AL = $map['condition2AL'];
        }
        if (isset($map['condition3AL'])) {
            $model->condition3AL = $map['condition3AL'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['deviceTypeLRP'])) {
            $model->deviceTypeLRP = $map['deviceTypeLRP'];
        }
        if (isset($map['emailPRP'])) {
            $model->emailPRP = $map['emailPRP'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['failReasonLRP'])) {
            $model->failReasonLRP = $map['failReasonLRP'];
        }
        if (isset($map['ipPRP'])) {
            $model->ipPRP = $map['ipPRP'];
        }
        if (isset($map['loginResultARP'])) {
            $model->loginResultARP = $map['loginResultARP'];
        }
        if (isset($map['loginTypeLRP'])) {
            $model->loginTypeLRP = $map['loginTypeLRP'];
        }
        if (isset($map['macPRP'])) {
            $model->macPRP = $map['macPRP'];
        }
        if (isset($map['mobilePRP'])) {
            $model->mobilePRP = $map['mobilePRP'];
        }
        if (isset($map['nickNamePRP'])) {
            $model->nickNamePRP = $map['nickNamePRP'];
        }
        if (isset($map['operateSourceLRP'])) {
            $model->operateSourceLRP = $map['operateSourceLRP'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['referPRP'])) {
            $model->referPRP = $map['referPRP'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['registerIpPRP'])) {
            $model->registerIpPRP = $map['registerIpPRP'];
        }
        if (isset($map['reqIdPBS'])) {
            $model->reqIdPBS = $map['reqIdPBS'];
        }
        if (isset($map['scoreEBS'])) {
            $model->scoreEBS = $map['scoreEBS'];
        }
        if (isset($map['scoreSBS'])) {
            $model->scoreSBS = $map['scoreSBS'];
        }
        if (isset($map['serviceABS'])) {
            $model->serviceABS = $map['serviceABS'];
        }
        if (isset($map['tagsLBS'])) {
            $model->tagsLBS = $map['tagsLBS'];
        }
        if (isset($map['umidPDI'])) {
            $model->umidPDI = $map['umidPDI'];
        }
        if (isset($map['userAgentPRP'])) {
            $model->userAgentPRP = $map['userAgentPRP'];
        }
        if (isset($map['userNameTypeLRP'])) {
            $model->userNameTypeLRP = $map['userNameTypeLRP'];
        }

        return $model;
    }
}
