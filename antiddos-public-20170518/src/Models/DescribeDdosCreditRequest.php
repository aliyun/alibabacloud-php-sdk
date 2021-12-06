<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeDdosCreditRequest extends Model
{
    /**
     * @var string
     */
    public $ddosRegionId;
    protected $_name = [
        'ddosRegionId' => 'DdosRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosCreditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }

        return $model;
    }
}
