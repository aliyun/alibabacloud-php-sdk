<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryCodeResponseBody\result;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $checkinDate;

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
    public $language;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $repoPath;
    protected $_name = [
        'branch'         => 'Branch',
        'checkinDate'    => 'CheckinDate',
        'fileName'       => 'FileName',
        'filePath'       => 'FilePath',
        'language'       => 'Language',
        'organizationId' => 'OrganizationId',
        'repoPath'       => 'RepoPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['Branch'] = $this->branch;
        }
        if (null !== $this->checkinDate) {
            $res['CheckinDate'] = $this->checkinDate;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->repoPath) {
            $res['RepoPath'] = $this->repoPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Branch'])) {
            $model->branch = $map['Branch'];
        }
        if (isset($map['CheckinDate'])) {
            $model->checkinDate = $map['CheckinDate'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['RepoPath'])) {
            $model->repoPath = $map['RepoPath'];
        }

        return $model;
    }
}
