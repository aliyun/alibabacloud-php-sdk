<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlexibleProtectionFlowRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $days;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'lang'     => 'Lang',
        'days'     => 'Days',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlexibleProtectionFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }

        return $model;
    }
}
