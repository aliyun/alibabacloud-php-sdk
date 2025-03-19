<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class GetDomainRequest extends Model
{
    /**
     * @description Indicates whether include domain related resource information.
     *
     * @example true
     *
     * @var bool
     */
    public $withStatistics;
    protected $_name = [
        'withStatistics' => 'withStatistics',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->withStatistics) {
            $res['withStatistics'] = $this->withStatistics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['withStatistics'])) {
            $model->withStatistics = $map['withStatistics'];
        }

        return $model;
    }
}
