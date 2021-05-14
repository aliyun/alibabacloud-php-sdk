<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse;

use AlibabaCloud\Tea\Model;

class markField extends Model
{
    /**
     * @var string
     */
    public $markMisType;

    /**
     * @var string
     */
    public $filedName;

    /**
     * @var string
     */
    public $filedAliasName;

    /**
     * @var string
     */
    public $markMisValue;

    /**
     * @var string[]
     */
    public $supportedMisType;
    protected $_name = [
        'markMisType'      => 'MarkMisType',
        'filedName'        => 'FiledName',
        'filedAliasName'   => 'FiledAliasName',
        'markMisValue'     => 'MarkMisValue',
        'supportedMisType' => 'SupportedMisType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->markMisType) {
            $res['MarkMisType'] = $this->markMisType;
        }
        if (null !== $this->filedName) {
            $res['FiledName'] = $this->filedName;
        }
        if (null !== $this->filedAliasName) {
            $res['FiledAliasName'] = $this->filedAliasName;
        }
        if (null !== $this->markMisValue) {
            $res['MarkMisValue'] = $this->markMisValue;
        }
        if (null !== $this->supportedMisType) {
            $res['SupportedMisType'] = $this->supportedMisType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return markField
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MarkMisType'])) {
            $model->markMisType = $map['MarkMisType'];
        }
        if (isset($map['FiledName'])) {
            $model->filedName = $map['FiledName'];
        }
        if (isset($map['FiledAliasName'])) {
            $model->filedAliasName = $map['FiledAliasName'];
        }
        if (isset($map['MarkMisValue'])) {
            $model->markMisValue = $map['MarkMisValue'];
        }
        if (isset($map['SupportedMisType'])) {
            if (!empty($map['SupportedMisType'])) {
                $model->supportedMisType = $map['SupportedMisType'];
            }
        }

        return $model;
    }
}
