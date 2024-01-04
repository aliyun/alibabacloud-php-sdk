<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetJobSanityCheckResultRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $sanityCheckNumber;

    /**
     * @example DeviceCheck
     *
     * @var string
     */
    public $sanityCheckPhase;
    protected $_name = [
        'sanityCheckNumber' => 'SanityCheckNumber',
        'sanityCheckPhase'  => 'SanityCheckPhase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sanityCheckNumber) {
            $res['SanityCheckNumber'] = $this->sanityCheckNumber;
        }
        if (null !== $this->sanityCheckPhase) {
            $res['SanityCheckPhase'] = $this->sanityCheckPhase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobSanityCheckResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SanityCheckNumber'])) {
            $model->sanityCheckNumber = $map['SanityCheckNumber'];
        }
        if (isset($map['SanityCheckPhase'])) {
            $model->sanityCheckPhase = $map['SanityCheckPhase'];
        }

        return $model;
    }
}
