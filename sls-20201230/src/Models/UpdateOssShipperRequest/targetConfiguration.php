<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOssShipperRequest;

use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOssShipperRequest\targetConfiguration\storage;
use AlibabaCloud\Tea\Model;

class targetConfiguration extends Model
{
    /**
     * @example 300
     *
     * @var int
     */
    public $bufferInterval;

    /**
     * @example 256
     *
     * @var int
     */
    public $bufferSize;

    /**
     * @example snappy
     *
     * @var string
     */
    public $compressType;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example test-bucket
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @example test-prefix/hello-prefix
     *
     * @var string
     */
    public $ossPrefix;

    /**
     * @example 2022/01/01/00/59
     *
     * @var string
     */
    public $pathFormat;

    /**
     * @example acs:ram::16542189**343050:role/aliyunlogdefaultrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @var storage
     */
    public $storage;

    /**
     * @example +8
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'bufferInterval' => 'bufferInterval',
        'bufferSize'     => 'bufferSize',
        'compressType'   => 'compressType',
        'enable'         => 'enable',
        'ossBucket'      => 'ossBucket',
        'ossPrefix'      => 'ossPrefix',
        'pathFormat'     => 'pathFormat',
        'roleArn'        => 'roleArn',
        'storage'        => 'storage',
        'timeZone'       => 'timeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bufferInterval) {
            $res['bufferInterval'] = $this->bufferInterval;
        }
        if (null !== $this->bufferSize) {
            $res['bufferSize'] = $this->bufferSize;
        }
        if (null !== $this->compressType) {
            $res['compressType'] = $this->compressType;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->ossBucket) {
            $res['ossBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossPrefix) {
            $res['ossPrefix'] = $this->ossPrefix;
        }
        if (null !== $this->pathFormat) {
            $res['pathFormat'] = $this->pathFormat;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->storage) {
            $res['storage'] = null !== $this->storage ? $this->storage->toMap() : null;
        }
        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bufferInterval'])) {
            $model->bufferInterval = $map['bufferInterval'];
        }
        if (isset($map['bufferSize'])) {
            $model->bufferSize = $map['bufferSize'];
        }
        if (isset($map['compressType'])) {
            $model->compressType = $map['compressType'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['ossBucket'])) {
            $model->ossBucket = $map['ossBucket'];
        }
        if (isset($map['ossPrefix'])) {
            $model->ossPrefix = $map['ossPrefix'];
        }
        if (isset($map['pathFormat'])) {
            $model->pathFormat = $map['pathFormat'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['storage'])) {
            $model->storage = storage::fromMap($map['storage']);
        }
        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
