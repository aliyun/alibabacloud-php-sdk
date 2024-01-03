<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ExportAnnotationsRequest extends Model
{
    /**
     * @example oss://***-hz-oss.oss-cn-hangzhou.aliyuncs.com/output/
     *
     * @var string
     */
    public $ossPath;

    /**
     * @example true
     *
     * @var string
     */
    public $registerDataset;

    /**
     * @example PAI
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'ossPath'         => 'OssPath',
        'registerDataset' => 'RegisterDataset',
        'target'          => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->registerDataset) {
            $res['RegisterDataset'] = $this->registerDataset;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportAnnotationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['RegisterDataset'])) {
            $model->registerDataset = $map['RegisterDataset'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
