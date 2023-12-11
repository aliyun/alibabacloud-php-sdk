<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateReverseDtsJobRequest extends Model
{
    /**
     * @example n99m9jx822k****
     *
     * @var string
     */
    public $dtsJobId;
    protected $_name = [
        'dtsJobId' => 'DtsJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReverseDtsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        return $model;
    }
}
