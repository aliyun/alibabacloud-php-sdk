<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ProcessItem extends Model
{
    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $devType;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var string
     */
    public $process;
    protected $_name = [
        'bundleId' => 'BundleId',
        'devType' => 'DevType',
        'directory' => 'Directory',
        'process' => 'Process',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }

        if (null !== $this->devType) {
            $res['DevType'] = $this->devType;
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->process) {
            $res['Process'] = $this->process;
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
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }

        if (isset($map['DevType'])) {
            $model->devType = $map['DevType'];
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }

        return $model;
    }
}
