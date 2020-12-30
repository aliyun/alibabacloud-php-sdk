<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse;

use AlibabaCloud\Tea\Model;

class markFieldsSource extends Model
{
    /**
     * @var string
     */
    public $markMisValue;

    /**
     * @var string[]
     */
    public $supportedMisType;

    /**
     * @var string
     */
    public $filedName;

    /**
     * @var string
     */
    public $filedAliasName;
    protected $_name = [
        'markMisValue'     => 'MarkMisValue',
        'supportedMisType' => 'SupportedMisType',
        'filedName'        => 'FiledName',
        'filedAliasName'   => 'FiledAliasName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->markMisValue) {
            $res['MarkMisValue'] = $this->markMisValue;
        }
        if (null !== $this->supportedMisType) {
            $res['SupportedMisType'] = $this->supportedMisType;
        }
        if (null !== $this->filedName) {
            $res['FiledName'] = $this->filedName;
        }
        if (null !== $this->filedAliasName) {
            $res['FiledAliasName'] = $this->filedAliasName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return markFieldsSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MarkMisValue'])) {
            $model->markMisValue = $map['MarkMisValue'];
        }
        if (isset($map['SupportedMisType'])) {
            if (!empty($map['SupportedMisType'])) {
                $model->supportedMisType = $map['SupportedMisType'];
            }
        }
        if (isset($map['FiledName'])) {
            $model->filedName = $map['FiledName'];
        }
        if (isset($map['FiledAliasName'])) {
            $model->filedAliasName = $map['FiledAliasName'];
        }

        return $model;
    }
}
