<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionDeploymentResponseBody;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionDeploymentResponseBody\dataList\status;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example 2019-06-21T02:22:53.309Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example dep-5e49fd471c9d4451c33bdd06
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example http://function-apiserver-test.oss-cn-shanghai.aliyuncs.com/5d0afc0e1c9d44*****32c30a-v5.zip?OSSAccessKeyId=LTA************&Expires=1561425220&Signature=SAgUkZFK54eAbU6TLT9zMZ7S8eg%3D
     *
     * @var string
     */
    public $downloadSignedUrl;

    /**
     * @example 2019-06-21T02:22:55.996Z
     *
     * @var string
     */
    public $modifiedAt;

    /**
     * @var status
     */
    public $status;

    /**
     * @example 2019061110511930090
     *
     * @var string
     */
    public $versionNo;
    protected $_name = [
        'createdAt'         => 'CreatedAt',
        'deploymentId'      => 'DeploymentId',
        'downloadSignedUrl' => 'DownloadSignedUrl',
        'modifiedAt'        => 'ModifiedAt',
        'status'            => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->versionNo) {
            $res['VersionNo'] = $this->versionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
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
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }
        if (isset($map['VersionNo'])) {
            $model->versionNo = $map['VersionNo'];
        }

        return $model;
    }
}
