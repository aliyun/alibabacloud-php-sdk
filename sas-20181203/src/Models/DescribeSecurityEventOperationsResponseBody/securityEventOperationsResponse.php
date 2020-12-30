<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse\markField;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse\markFieldsSource;
use AlibabaCloud\Tea\Model;

class securityEventOperationsResponse extends Model
{
    /**
     * @var string
     */
    public $operationParams;

    /**
     * @var string
     */
    public $operationCode;

    /**
     * @var markField[]
     */
    public $markField;

    /**
     * @var bool
     */
    public $userCanOperate;

    /**
     * @var markFieldsSource[]
     */
    public $markFieldsSource;
    protected $_name = [
        'operationParams'  => 'OperationParams',
        'operationCode'    => 'OperationCode',
        'markField'        => 'MarkField',
        'userCanOperate'   => 'UserCanOperate',
        'markFieldsSource' => 'MarkFieldsSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->markField) {
            $res['MarkField'] = [];
            if (null !== $this->markField && \is_array($this->markField)) {
                $n = 0;
                foreach ($this->markField as $item) {
                    $res['MarkField'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userCanOperate) {
            $res['UserCanOperate'] = $this->userCanOperate;
        }
        if (null !== $this->markFieldsSource) {
            $res['MarkFieldsSource'] = [];
            if (null !== $this->markFieldsSource && \is_array($this->markFieldsSource)) {
                $n = 0;
                foreach ($this->markFieldsSource as $item) {
                    $res['MarkFieldsSource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEventOperationsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['MarkField'])) {
            if (!empty($map['MarkField'])) {
                $model->markField = [];
                $n                = 0;
                foreach ($map['MarkField'] as $item) {
                    $model->markField[$n++] = null !== $item ? markField::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserCanOperate'])) {
            $model->userCanOperate = $map['UserCanOperate'];
        }
        if (isset($map['MarkFieldsSource'])) {
            if (!empty($map['MarkFieldsSource'])) {
                $model->markFieldsSource = [];
                $n                       = 0;
                foreach ($map['MarkFieldsSource'] as $item) {
                    $model->markFieldsSource[$n++] = null !== $item ? markFieldsSource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
