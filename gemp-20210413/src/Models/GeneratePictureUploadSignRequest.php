<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureUploadSignRequest\files;
use AlibabaCloud\Tea\Model;

class GeneratePictureUploadSignRequest extends Model
{
    /**
     * @var files[]
     */
    public $files;

    /**
     * @example 123123
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example INCIDENT 事件 ALERT告警 PROBLEM故障
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'files'        => 'files',
        'instanceId'   => 'instanceId',
        'instanceType' => 'instanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->files) {
            $res['files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GeneratePictureUploadSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['files'] as $item) {
                    $model->files[$n++] = null !== $item ? files::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        return $model;
    }
}
