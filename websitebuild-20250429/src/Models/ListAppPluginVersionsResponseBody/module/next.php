<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppPluginVersionsResponseBody\module;

use AlibabaCloud\Dara\Model;

class next extends Model
{
    /**
     * @var string
     */
    public $changelog;

    /**
     * @var string
     */
    public $commitSha;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var int
     */
    public $fileCount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'changelog' => 'Changelog',
        'commitSha' => 'CommitSha',
        'createdBy' => 'CreatedBy',
        'fileCount' => 'FileCount',
        'gmtCreate' => 'GmtCreate',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changelog) {
            $res['Changelog'] = $this->changelog;
        }

        if (null !== $this->commitSha) {
            $res['CommitSha'] = $this->commitSha;
        }

        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }

        if (null !== $this->fileCount) {
            $res['FileCount'] = $this->fileCount;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Changelog'])) {
            $model->changelog = $map['Changelog'];
        }

        if (isset($map['CommitSha'])) {
            $model->commitSha = $map['CommitSha'];
        }

        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }

        if (isset($map['FileCount'])) {
            $model->fileCount = $map['FileCount'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
