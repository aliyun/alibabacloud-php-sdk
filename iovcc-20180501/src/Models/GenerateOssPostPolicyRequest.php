<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GenerateOssPostPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $ext;

    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $accessKey;
    protected $_name = [
        'projectId' => 'ProjectId',
        'ext'       => 'Ext',
        'accessId'  => 'AccessId',
        'accessKey' => 'AccessKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateOssPostPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }

        return $model;
    }
}
