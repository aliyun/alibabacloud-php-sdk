<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionResponseBody;

use AlibabaCloud\Tea\Model;

class deployment extends Model
{
    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $downloadSignedUrl;

    /**
     * @var string
     */
    public $versionNo;

    /**
     * @var string
     */
    public $modifiedAt;
    protected $_name = [
        'deploymentId'      => 'DeploymentId',
        'createdAt'         => 'CreatedAt',
        'downloadSignedUrl' => 'DownloadSignedUrl',
        'versionNo'         => 'VersionNo',
        'modifiedAt'        => 'ModifiedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->downloadSignedUrl) {
            $res['DownloadSignedUrl'] = $this->downloadSignedUrl;
        }
        if (null !== $this->versionNo) {
            $res['VersionNo'] = $this->versionNo;
        }
        if (null !== $this->modifiedAt) {
            $res['ModifiedAt'] = $this->modifiedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['DownloadSignedUrl'])) {
            $model->downloadSignedUrl = $map['DownloadSignedUrl'];
        }
        if (isset($map['VersionNo'])) {
            $model->versionNo = $map['VersionNo'];
        }
        if (isset($map['ModifiedAt'])) {
            $model->modifiedAt = $map['ModifiedAt'];
        }

        return $model;
    }
}
