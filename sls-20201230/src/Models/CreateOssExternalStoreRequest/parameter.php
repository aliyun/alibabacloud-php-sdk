<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\CreateOssExternalStoreRequest;

use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOssExternalStoreRequest\parameter\columns;
use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @example LTAI5tFsHGGeYry*****1Sz
     *
     * @var string
     */
    public $accessid;

    /**
     * @example GyviCLDVHkHrOztdkxuE6******Rp6
     *
     * @var string
     */
    public $accesskey;

    /**
     * @example my-bucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @example oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var string[]
     */
    public $objects;
    protected $_name = [
        'accessid'  => 'accessid',
        'accesskey' => 'accesskey',
        'bucket'    => 'bucket',
        'columns'   => 'columns',
        'endpoint'  => 'endpoint',
        'objects'   => 'objects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessid) {
            $res['accessid'] = $this->accessid;
        }
        if (null !== $this->accesskey) {
            $res['accesskey'] = $this->accesskey;
        }
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }
        if (null !== $this->columns) {
            $res['columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->objects) {
            $res['objects'] = $this->objects;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessid'])) {
            $model->accessid = $map['accessid'];
        }
        if (isset($map['accesskey'])) {
            $model->accesskey = $map['accesskey'];
        }
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }
        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['objects'])) {
            if (!empty($map['objects'])) {
                $model->objects = $map['objects'];
            }
        }

        return $model;
    }
}
