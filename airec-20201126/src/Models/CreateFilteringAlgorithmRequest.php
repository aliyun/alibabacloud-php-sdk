<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class CreateFilteringAlgorithmRequest extends Model
{
    /**
     * @description xxx
     *
     * @example true
     *
     * @var string
     */
    public $dryRun;
    protected $_name = [
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFilteringAlgorithmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
