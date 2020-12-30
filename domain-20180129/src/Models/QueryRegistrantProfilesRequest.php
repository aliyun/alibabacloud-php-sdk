<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryRegistrantProfilesRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $registrantOrganization;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var bool
     */
    public $defaultRegistrantProfile;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $zhRegistrantOrganization;

    /**
     * @var string
     */
    public $registrantType;

    /**
     * @var string
     */
    public $realNameStatus;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $registrantProfileType;
    protected $_name = [
        'lang'                     => 'Lang',
        'registrantOrganization'   => 'RegistrantOrganization',
        'userClientIp'             => 'UserClientIp',
        'registrantProfileId'      => 'RegistrantProfileId',
        'defaultRegistrantProfile' => 'DefaultRegistrantProfile',
        'pageNum'                  => 'PageNum',
        'pageSize'                 => 'PageSize',
        'zhRegistrantOrganization' => 'ZhRegistrantOrganization',
        'registrantType'           => 'RegistrantType',
        'realNameStatus'           => 'RealNameStatus',
        'email'                    => 'Email',
        'registrantProfileType'    => 'RegistrantProfileType',
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
        if (null !== $this->registrantOrganization) {
            $res['RegistrantOrganization'] = $this->registrantOrganization;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->defaultRegistrantProfile) {
            $res['DefaultRegistrantProfile'] = $this->defaultRegistrantProfile;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->zhRegistrantOrganization) {
            $res['ZhRegistrantOrganization'] = $this->zhRegistrantOrganization;
        }
        if (null !== $this->registrantType) {
            $res['RegistrantType'] = $this->registrantType;
        }
        if (null !== $this->realNameStatus) {
            $res['RealNameStatus'] = $this->realNameStatus;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->registrantProfileType) {
            $res['RegistrantProfileType'] = $this->registrantProfileType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRegistrantProfilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegistrantOrganization'])) {
            $model->registrantOrganization = $map['RegistrantOrganization'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['DefaultRegistrantProfile'])) {
            $model->defaultRegistrantProfile = $map['DefaultRegistrantProfile'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ZhRegistrantOrganization'])) {
            $model->zhRegistrantOrganization = $map['ZhRegistrantOrganization'];
        }
        if (isset($map['RegistrantType'])) {
            $model->registrantType = $map['RegistrantType'];
        }
        if (isset($map['RealNameStatus'])) {
            $model->realNameStatus = $map['RealNameStatus'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['RegistrantProfileType'])) {
            $model->registrantProfileType = $map['RegistrantProfileType'];
        }

        return $model;
    }
}
