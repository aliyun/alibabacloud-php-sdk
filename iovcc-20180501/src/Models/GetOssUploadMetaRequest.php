<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GetOssUploadMetaRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $ext;
    protected $_name = [
        'projectId' => 'ProjectId',
        'ext'       => 'Ext',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssUploadMetaRequest
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

        return $model;
    }
}
