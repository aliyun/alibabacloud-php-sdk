<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataLimitDetailRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $networkType;
    protected $_name = [
        'lang'        => 'Lang',
        'id'          => 'Id',
        'networkType' => 'NetworkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataLimitDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        return $model;
    }
}
