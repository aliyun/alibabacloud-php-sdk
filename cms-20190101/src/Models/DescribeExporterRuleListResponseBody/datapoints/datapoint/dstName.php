<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponseBody\datapoints\datapoint;

use AlibabaCloud\Tea\Model;

class dstName extends Model
{
    /**
     * @var string[]
     */
    public $dstName;
    protected $_name = [
        'dstName' => 'DstName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstName) {
            $res['DstName'] = $this->dstName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dstName
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstName'])) {
            if (!empty($map['DstName'])) {
                $model->dstName = $map['DstName'];
            }
        }

        return $model;
    }
}
