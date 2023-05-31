<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulNumStatisticsRequest extends Model
{
    /**
     * @description The source of the request.
     *
     *   If you want to query Security Center-related data, set the value to **sas**.
     *   If you want to query Server Guard-related data, you do not need to specify this parameter.
     *
     * @example sas
     *
     * @var string
     */
    public $from;
    protected $_name = [
        'from' => 'From',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulNumStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        return $model;
    }
}
