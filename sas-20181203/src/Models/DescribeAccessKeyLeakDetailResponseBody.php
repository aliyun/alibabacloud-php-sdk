<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccessKeyLeakDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $accesskeyId;

    /**
     * @var string
     */
    public $asset;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $dealTime;

    /**
     * @var string
     */
    public $dealType;

    /**
     * @var string
     */
    public $githubFileName;

    /**
     * @var string
     */
    public $githubFileType;

    /**
     * @var string
     */
    public $githubFileUpdateTime;

    /**
     * @var string
     */
    public $githubFileUrl;

    /**
     * @var string
     */
    public $githubRepoName;

    /**
     * @var string
     */
    public $githubRepoUrl;

    /**
     * @var string
     */
    public $githubUser;

    /**
     * @var string
     */
    public $githubUserPicUrl;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $whitelistStatus;
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
        'type'                 => 'Type',
        'whitelistStatus'      => 'WhitelistStatus',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->whitelistStatus) {
            $res['WhitelistStatus'] = $this->whitelistStatus;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WhitelistStatus'])) {
            $model->whitelistStatus = $map['WhitelistStatus'];
        }

        return $model;
    }
}
