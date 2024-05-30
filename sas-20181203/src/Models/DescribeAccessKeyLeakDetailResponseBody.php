<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccessKeyLeakDetailResponseBody extends Model
{
    /**
     * @description The ID of the AccessKey pair that is leaked.
     *
     * @example LTAI4G4VjkC9wenfEvgX****
     *
     * @var string
     */
    public $accesskeyId;

    /**
     * @description The platform to which the asset belongs. The value is fixed as **Cloud platform**.
     *
     * @example Cloud platform
     *
     * @var string
     */
    public $asset;

    /**
     * @description The code snippet that is leaked.
     *
     * @example \\n1231 \\nak=LTAI4G4VjkC9wenfEvgX**** \\n12311123 \\nsk1999 \\nsk1999sk1999 \\nsk1999sk1999 \\n\\n\\ntest001 ak hht \\nak=LTAI4G4VjkC9wenfEvgX**** \\nsk=AjEhS9XmnIzllpAx2LxMTMdrTG****
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the AccessKey pair leak was handled.
     *
     * @example 2022-01-17 15:47:08
     *
     * @var string
     */
    public $dealTime;

    /**
     * @description The solution to the AccessKey pair leak. Valid values:
     *
     *   **manual**: manually deleted
     *   **disable**: manually disabled
     *   **add-whitelist**: added to the whitelist
     *   **pending**: unhandled
     *
     * @example add-whitelist
     *
     * @var string
     */
    public $dealType;

    /**
     * @description The name of the GitHub file.
     *
     * @example testAkLeak
     *
     * @var string
     */
    public $githubFileName;

    /**
     * @description The type of the GitHub file. Valid values:
     *
     *   Python
     *   XML
     *   GO
     *   Javascript
     *   INI
     *   JSON
     *   C++
     *
     * @example Python
     *
     * @var string
     */
    public $githubFileType;

    /**
     * @description The time when the GitHub file was updated.
     *
     * @example 2021-07-06T09:49:33
     *
     * @var string
     */
    public $githubFileUpdateTime;

    /**
     * @description The URL of the GitHub file.
     *
     * @example https://github.com/Blue00Blue/ExamOnline/blob/6c932c10fc3f217783f3937e2b230f79656c18a7/testAk****
     *
     * @var string
     */
    public $githubFileUrl;

    /**
     * @description The name of the GitHub repository.
     *
     * @example ExamOnline
     *
     * @var string
     */
    public $githubRepoName;

    /**
     * @description The URL of the GitHub repository.
     *
     * @example https://github.com/Blue00Blue/ExamOn****
     *
     * @var string
     */
    public $githubRepoUrl;

    /**
     * @description The username of the GitHub user.
     *
     * @example Blue00Blue
     *
     * @var string
     */
    public $githubUser;

    /**
     * @description The URL of the profile picture for the GitHub user.
     *
     * @example https://avatars.githubusercontent.com/u/26296896?s=48&v=****
     *
     * @var string
     */
    public $githubUserPicUrl;

    /**
     * @description The first time when the AccessKey pair leak was detected.
     *
     * @example 2021-07-06 17:49:41
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The last time when the AccessKey pair leak was detected.
     *
     * @example 2021-07-06 17:49:39
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The remarks of the AccessKey pair leak.
     *
     * @example 12
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 79CFF74D-E967-5407-8A78-EE03B925FDAA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The platform on which the AccessKey pair leak is detected.
     *
     * @example GitHub
     *
     * @var string
     */
    public $source;

    /**
     * @description The validity of the key that is associated with the AccessKey pair. Valid values:
     *
     *   **0**: to be confirmed.
     *   **1**: valid.
     *   **2**: invalid.
     *
     * @example 2
     *
     * @var int
     */
    public $tokenValid;

    /**
     * @description The type of the leak. The value is fixed as **AccessKey**.
     *
     * @example AccessKey
     *
     * @var string
     */
    public $type;

    /**
     * @description Indicates whether the AccessKey pair leak is added to the whitelist. Valid values:
     *
     *   **no**: no
     *   **yes**: yes
     *
     * @example no
     *
     * @var string
     */
    public $whitelistStatus;

    /**
     * @description The time when the AccessKey pair was added to the whitelist. Unit: milliseconds.
     *
     * @example 1689172004478
     *
     * @var int
     */
    public $whitelistTime;
    protected $_name = [
        'accesskeyId'          => 'AccesskeyId',
        'asset'                => 'Asset',
        'code'                 => 'Code',
        'dealTime'             => 'DealTime',
        'dealType'             => 'DealType',
        'githubFileName'       => 'GithubFileName',
        'githubFileType'       => 'GithubFileType',
        'githubFileUpdateTime' => 'GithubFileUpdateTime',
        'githubFileUrl'        => 'GithubFileUrl',
        'githubRepoName'       => 'GithubRepoName',
        'githubRepoUrl'        => 'GithubRepoUrl',
        'githubUser'           => 'GithubUser',
        'githubUserPicUrl'     => 'GithubUserPicUrl',
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'remark'               => 'Remark',
        'requestId'            => 'RequestId',
        'source'               => 'Source',
        'tokenValid'           => 'TokenValid',
        'type'                 => 'Type',
        'whitelistStatus'      => 'WhitelistStatus',
        'whitelistTime'        => 'WhitelistTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accesskeyId) {
            $res['AccesskeyId'] = $this->accesskeyId;
        }
        if (null !== $this->asset) {
            $res['Asset'] = $this->asset;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->dealType) {
            $res['DealType'] = $this->dealType;
        }
        if (null !== $this->githubFileName) {
            $res['GithubFileName'] = $this->githubFileName;
        }
        if (null !== $this->githubFileType) {
            $res['GithubFileType'] = $this->githubFileType;
        }
        if (null !== $this->githubFileUpdateTime) {
            $res['GithubFileUpdateTime'] = $this->githubFileUpdateTime;
        }
        if (null !== $this->githubFileUrl) {
            $res['GithubFileUrl'] = $this->githubFileUrl;
        }
        if (null !== $this->githubRepoName) {
            $res['GithubRepoName'] = $this->githubRepoName;
        }
        if (null !== $this->githubRepoUrl) {
            $res['GithubRepoUrl'] = $this->githubRepoUrl;
        }
        if (null !== $this->githubUser) {
            $res['GithubUser'] = $this->githubUser;
        }
        if (null !== $this->githubUserPicUrl) {
            $res['GithubUserPicUrl'] = $this->githubUserPicUrl;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->tokenValid) {
            $res['TokenValid'] = $this->tokenValid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->whitelistStatus) {
            $res['WhitelistStatus'] = $this->whitelistStatus;
        }
        if (null !== $this->whitelistTime) {
            $res['WhitelistTime'] = $this->whitelistTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccessKeyLeakDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccesskeyId'])) {
            $model->accesskeyId = $map['AccesskeyId'];
        }
        if (isset($map['Asset'])) {
            $model->asset = $map['Asset'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['DealType'])) {
            $model->dealType = $map['DealType'];
        }
        if (isset($map['GithubFileName'])) {
            $model->githubFileName = $map['GithubFileName'];
        }
        if (isset($map['GithubFileType'])) {
            $model->githubFileType = $map['GithubFileType'];
        }
        if (isset($map['GithubFileUpdateTime'])) {
            $model->githubFileUpdateTime = $map['GithubFileUpdateTime'];
        }
        if (isset($map['GithubFileUrl'])) {
            $model->githubFileUrl = $map['GithubFileUrl'];
        }
        if (isset($map['GithubRepoName'])) {
            $model->githubRepoName = $map['GithubRepoName'];
        }
        if (isset($map['GithubRepoUrl'])) {
            $model->githubRepoUrl = $map['GithubRepoUrl'];
        }
        if (isset($map['GithubUser'])) {
            $model->githubUser = $map['GithubUser'];
        }
        if (isset($map['GithubUserPicUrl'])) {
            $model->githubUserPicUrl = $map['GithubUserPicUrl'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TokenValid'])) {
            $model->tokenValid = $map['TokenValid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WhitelistStatus'])) {
            $model->whitelistStatus = $map['WhitelistStatus'];
        }
        if (isset($map['WhitelistTime'])) {
            $model->whitelistTime = $map['WhitelistTime'];
        }

        return $model;
    }
}
