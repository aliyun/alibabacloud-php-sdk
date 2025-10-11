<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody\components;

use AlibabaCloud\Dara\Model;

class securityIPArrays extends Model
{
    /**
     * @var string
     */
    public $securityIPArrayName;

    /**
     * @var string
     */
    public $securityIPArrayTag;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $securityIPNetType;

    /**
     * @var string
     */
    public $securityIPType;
    protected $_name = [
        'securityIPArrayName' => 'SecurityIPArrayName',
        'securityIPArrayTag' => 'SecurityIPArrayTag',
        'securityIPList' => 'SecurityIPList',
        'securityIPNetType' => 'SecurityIPNetType',
        'securityIPType' => 'SecurityIPType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityIPArrayName) {
            $res['SecurityIPArrayName'] = $this->securityIPArrayName;
        }

        if (null !== $this->securityIPArrayTag) {
            $res['SecurityIPArrayTag'] = $this->securityIPArrayTag;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->securityIPNetType) {
            $res['SecurityIPNetType'] = $this->securityIPNetType;
        }

        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityIPArrayName'])) {
            $model->securityIPArrayName = $map['SecurityIPArrayName'];
        }

        if (isset($map['SecurityIPArrayTag'])) {
            $model->securityIPArrayTag = $map['SecurityIPArrayTag'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['SecurityIPNetType'])) {
            $model->securityIPNetType = $map['SecurityIPNetType'];
        }

        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }

        return $model;
    }
}
