<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse;

use AlibabaCloud\Dara\Model;

class markField extends Model
{
    /**
     * @var string
     */
    public $filedAliasName;
    /**
     * @var string
     */
    public $filedName;
    /**
     * @var string
     */
    public $markMisType;
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
    public $uuid;
    protected $_name = [
        'filedAliasName'   => 'FiledAliasName',
        'filedName'        => 'FiledName',
        'markMisType'      => 'MarkMisType',
        'markMisValue'     => 'MarkMisValue',
        'supportedMisType' => 'SupportedMisType',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->supportedMisType)) {
            Model::validateArray($this->supportedMisType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filedAliasName) {
            $res['FiledAliasName'] = $this->filedAliasName;
        }

        if (null !== $this->filedName) {
            $res['FiledName'] = $this->filedName;
        }

        if (null !== $this->markMisType) {
            $res['MarkMisType'] = $this->markMisType;
        }

        if (null !== $this->markMisValue) {
            $res['MarkMisValue'] = $this->markMisValue;
        }

        if (null !== $this->supportedMisType) {
            if (\is_array($this->supportedMisType)) {
                $res['SupportedMisType'] = [];
                $n1                      = 0;
                foreach ($this->supportedMisType as $item1) {
                    $res['SupportedMisType'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['FiledAliasName'])) {
            $model->filedAliasName = $map['FiledAliasName'];
        }

        if (isset($map['FiledName'])) {
            $model->filedName = $map['FiledName'];
        }

        if (isset($map['MarkMisType'])) {
            $model->markMisType = $map['MarkMisType'];
        }

        if (isset($map['MarkMisValue'])) {
            $model->markMisValue = $map['MarkMisValue'];
        }

        if (isset($map['SupportedMisType'])) {
            if (!empty($map['SupportedMisType'])) {
                $model->supportedMisType = [];
                $n1                      = 0;
                foreach ($map['SupportedMisType'] as $item1) {
                    $model->supportedMisType[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
