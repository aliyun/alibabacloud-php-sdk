<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMiniGameQualificationByAppResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMiniGameQualificationByAppResponseBody\content\copyrightAuthorizationFiles;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMiniGameQualificationByAppResponseBody\content\ipAuthorizationFiles;

class content extends Model
{
    /**
     * @var string
     */
    public $businessLicenseName;

    /**
     * @var string
     */
    public $businessLicenseUrl;

    /**
     * @var copyrightAuthorizationFiles[]
     */
    public $copyrightAuthorizationFiles;

    /**
     * @var string
     */
    public $copyrightFileName;

    /**
     * @var string
     */
    public $copyrightRegistrationNumber;

    /**
     * @var string
     */
    public $copyrightUrl;

    /**
     * @var string
     */
    public $developer;

    /**
     * @var string
     */
    public $gameType;

    /**
     * @var string
     */
    public $gameVersionId;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $icpFileName;

    /**
     * @var string
     */
    public $icpUrl;

    /**
     * @var string
     */
    public $idCode;

    /**
     * @var ipAuthorizationFiles[]
     */
    public $ipAuthorizationFiles;

    /**
     * @var string
     */
    public $miniProgramCode;

    /**
     * @var int
     */
    public $miniProgramId;

    /**
     * @var string
     */
    public $onlineGamePubReFileName;

    /**
     * @var string
     */
    public $onlineGamePubReUrl;

    /**
     * @var string
     */
    public $privacyPolicyUrl;

    /**
     * @var string
     */
    public $publisher;

    /**
     * @var string
     */
    public $reviewStatus;
    protected $_name = [
        'businessLicenseName' => 'BusinessLicenseName',
        'businessLicenseUrl' => 'BusinessLicenseUrl',
        'copyrightAuthorizationFiles' => 'CopyrightAuthorizationFiles',
        'copyrightFileName' => 'CopyrightFileName',
        'copyrightRegistrationNumber' => 'CopyrightRegistrationNumber',
        'copyrightUrl' => 'CopyrightUrl',
        'developer' => 'Developer',
        'gameType' => 'GameType',
        'gameVersionId' => 'GameVersionId',
        'gmtModified' => 'GmtModified',
        'icpFileName' => 'IcpFileName',
        'icpUrl' => 'IcpUrl',
        'idCode' => 'IdCode',
        'ipAuthorizationFiles' => 'IpAuthorizationFiles',
        'miniProgramCode' => 'MiniProgramCode',
        'miniProgramId' => 'MiniProgramId',
        'onlineGamePubReFileName' => 'OnlineGamePubReFileName',
        'onlineGamePubReUrl' => 'OnlineGamePubReUrl',
        'privacyPolicyUrl' => 'PrivacyPolicyUrl',
        'publisher' => 'Publisher',
        'reviewStatus' => 'ReviewStatus',
    ];

    public function validate()
    {
        if (\is_array($this->copyrightAuthorizationFiles)) {
            Model::validateArray($this->copyrightAuthorizationFiles);
        }
        if (\is_array($this->ipAuthorizationFiles)) {
            Model::validateArray($this->ipAuthorizationFiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessLicenseName) {
            $res['BusinessLicenseName'] = $this->businessLicenseName;
        }

        if (null !== $this->businessLicenseUrl) {
            $res['BusinessLicenseUrl'] = $this->businessLicenseUrl;
        }

        if (null !== $this->copyrightAuthorizationFiles) {
            if (\is_array($this->copyrightAuthorizationFiles)) {
                $res['CopyrightAuthorizationFiles'] = [];
                $n1 = 0;
                foreach ($this->copyrightAuthorizationFiles as $item1) {
                    $res['CopyrightAuthorizationFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->copyrightFileName) {
            $res['CopyrightFileName'] = $this->copyrightFileName;
        }

        if (null !== $this->copyrightRegistrationNumber) {
            $res['CopyrightRegistrationNumber'] = $this->copyrightRegistrationNumber;
        }

        if (null !== $this->copyrightUrl) {
            $res['CopyrightUrl'] = $this->copyrightUrl;
        }

        if (null !== $this->developer) {
            $res['Developer'] = $this->developer;
        }

        if (null !== $this->gameType) {
            $res['GameType'] = $this->gameType;
        }

        if (null !== $this->gameVersionId) {
            $res['GameVersionId'] = $this->gameVersionId;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->icpFileName) {
            $res['IcpFileName'] = $this->icpFileName;
        }

        if (null !== $this->icpUrl) {
            $res['IcpUrl'] = $this->icpUrl;
        }

        if (null !== $this->idCode) {
            $res['IdCode'] = $this->idCode;
        }

        if (null !== $this->ipAuthorizationFiles) {
            if (\is_array($this->ipAuthorizationFiles)) {
                $res['IpAuthorizationFiles'] = [];
                $n1 = 0;
                foreach ($this->ipAuthorizationFiles as $item1) {
                    $res['IpAuthorizationFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->miniProgramCode) {
            $res['MiniProgramCode'] = $this->miniProgramCode;
        }

        if (null !== $this->miniProgramId) {
            $res['MiniProgramId'] = $this->miniProgramId;
        }

        if (null !== $this->onlineGamePubReFileName) {
            $res['OnlineGamePubReFileName'] = $this->onlineGamePubReFileName;
        }

        if (null !== $this->onlineGamePubReUrl) {
            $res['OnlineGamePubReUrl'] = $this->onlineGamePubReUrl;
        }

        if (null !== $this->privacyPolicyUrl) {
            $res['PrivacyPolicyUrl'] = $this->privacyPolicyUrl;
        }

        if (null !== $this->publisher) {
            $res['Publisher'] = $this->publisher;
        }

        if (null !== $this->reviewStatus) {
            $res['ReviewStatus'] = $this->reviewStatus;
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
        if (isset($map['BusinessLicenseName'])) {
            $model->businessLicenseName = $map['BusinessLicenseName'];
        }

        if (isset($map['BusinessLicenseUrl'])) {
            $model->businessLicenseUrl = $map['BusinessLicenseUrl'];
        }

        if (isset($map['CopyrightAuthorizationFiles'])) {
            if (!empty($map['CopyrightAuthorizationFiles'])) {
                $model->copyrightAuthorizationFiles = [];
                $n1 = 0;
                foreach ($map['CopyrightAuthorizationFiles'] as $item1) {
                    $model->copyrightAuthorizationFiles[$n1] = copyrightAuthorizationFiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CopyrightFileName'])) {
            $model->copyrightFileName = $map['CopyrightFileName'];
        }

        if (isset($map['CopyrightRegistrationNumber'])) {
            $model->copyrightRegistrationNumber = $map['CopyrightRegistrationNumber'];
        }

        if (isset($map['CopyrightUrl'])) {
            $model->copyrightUrl = $map['CopyrightUrl'];
        }

        if (isset($map['Developer'])) {
            $model->developer = $map['Developer'];
        }

        if (isset($map['GameType'])) {
            $model->gameType = $map['GameType'];
        }

        if (isset($map['GameVersionId'])) {
            $model->gameVersionId = $map['GameVersionId'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IcpFileName'])) {
            $model->icpFileName = $map['IcpFileName'];
        }

        if (isset($map['IcpUrl'])) {
            $model->icpUrl = $map['IcpUrl'];
        }

        if (isset($map['IdCode'])) {
            $model->idCode = $map['IdCode'];
        }

        if (isset($map['IpAuthorizationFiles'])) {
            if (!empty($map['IpAuthorizationFiles'])) {
                $model->ipAuthorizationFiles = [];
                $n1 = 0;
                foreach ($map['IpAuthorizationFiles'] as $item1) {
                    $model->ipAuthorizationFiles[$n1] = ipAuthorizationFiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MiniProgramCode'])) {
            $model->miniProgramCode = $map['MiniProgramCode'];
        }

        if (isset($map['MiniProgramId'])) {
            $model->miniProgramId = $map['MiniProgramId'];
        }

        if (isset($map['OnlineGamePubReFileName'])) {
            $model->onlineGamePubReFileName = $map['OnlineGamePubReFileName'];
        }

        if (isset($map['OnlineGamePubReUrl'])) {
            $model->onlineGamePubReUrl = $map['OnlineGamePubReUrl'];
        }

        if (isset($map['PrivacyPolicyUrl'])) {
            $model->privacyPolicyUrl = $map['PrivacyPolicyUrl'];
        }

        if (isset($map['Publisher'])) {
            $model->publisher = $map['Publisher'];
        }

        if (isset($map['ReviewStatus'])) {
            $model->reviewStatus = $map['ReviewStatus'];
        }

        return $model;
    }
}
