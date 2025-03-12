<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCommonOverallConfigListRequest extends Model
{
    /**
     * @description The source IP address of the request.
     *
     * @example 119.136.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The types of the configuration items.
     *
     * This parameter is required.
     * @var string[]
     */
    public $typeList;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'typeList' => 'TypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->typeList) {
            $res['TypeList'] = $this->typeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommonOverallConfigListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = $map['TypeList'];
            }
        }

        return $model;
    }
}
