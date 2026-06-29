<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class ExportAnnotationsRequest extends Model
{
    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $registerDataset;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'ossPath' => 'OssPath',
        'registerDataset' => 'RegisterDataset',
        'target' => 'Target',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
