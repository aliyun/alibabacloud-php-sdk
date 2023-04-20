<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionResponseBody;

use AlibabaCloud\Tea\Model;

class deployment extends Model
{
    /**
     * @example 2019-06-11T10:51:19Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example dep-62020d3bea44fd4608118233
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example http://bucket.oss-cn-shanghai.aliyuncs.com/xxxx-v2.zip?OSSAccessKeyId=LT*********1DkK6&Expires=1561425220&Signature=xEuiAgUMShQ4v8fYIl3FM8Jp3MA%3D
     *
     * @var string
     */
    public $downloadSignedUrl;

    /**
     * @example 2019-06-11T10:51:19Z
     *
     * @var string
     */
    public $modifiedAt;

    /**
     * @example 2019061110511905080
     *
     * @var string
     */
    public $versionNo;
    protected $_name = [
        'createdAt'         => 'CreatedAt',
        'deploymentId'      => 'DeploymentId',
        'downloadSignedUrl' => 'DownloadSignedUrl',
        'modifiedAt'        => 'ModifiedAt',
        'versionNo'         => 'VersionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }
        if (null !== $this->downloadSignedUrl) {
            $res['DownloadSignedUrl'] = $this->downloadSignedUrl;
        }
        if (null !== $this->modifiedAt) {
            $res['ModifiedAt'] = $this->modifiedAt;
        }
        if (null !== $this->versionNo) {
            $res['VersionNo'] = $this->versionNo;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }
        if (isset($map['DownloadSignedUrl'])) {
            $model->downloadSignedUrl = $map['DownloadSignedUrl'];
        }
        if (isset($map['ModifiedAt'])) {
            $model->modifiedAt = $map['ModifiedAt'];
        }
        if (isset($map['VersionNo'])) {
            $model->versionNo = $map['VersionNo'];
        }

        return $model;
    }
}
