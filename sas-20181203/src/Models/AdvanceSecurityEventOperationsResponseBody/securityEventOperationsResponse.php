<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AdvanceSecurityEventOperationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\AdvanceSecurityEventOperationsResponseBody\securityEventOperationsResponse\markField;
use AlibabaCloud\SDK\Sas\V20181203\Models\AdvanceSecurityEventOperationsResponseBody\securityEventOperationsResponse\markFieldsSource;

class securityEventOperationsResponse extends Model
{
    /**
     * @var markField[]
     */
    public $markField;
    /**
     * @var markFieldsSource[]
     */
    public $markFieldsSource;
    /**
     * @var string
     */
    public $operationCode;
    /**
     * @var string
     */
    public $operationParams;
    /**
     * @var bool
     */
    public $userCanOperate;
    protected $_name = [
        'markField'        => 'MarkField',
        'markFieldsSource' => 'MarkFieldsSource',
        'operationCode'    => 'OperationCode',
        'operationParams'  => 'OperationParams',
        'userCanOperate'   => 'UserCanOperate',
    ];

    public function validate()
    {
        if (\is_array($this->markField)) {
            Model::validateArray($this->markField);
        }
        if (\is_array($this->markFieldsSource)) {
            Model::validateArray($this->markFieldsSource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->markField) {
            if (\is_array($this->markField)) {
                $res['MarkField'] = [];
                $n1               = 0;
                foreach ($this->markField as $item1) {
                    $res['MarkField'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->markFieldsSource) {
            if (\is_array($this->markFieldsSource)) {
                $res['MarkFieldsSource'] = [];
                $n1                      = 0;
                foreach ($this->markFieldsSource as $item1) {
                    $res['MarkFieldsSource'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }

        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
        }

        if (null !== $this->userCanOperate) {
            $res['UserCanOperate'] = $this->userCanOperate;
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
        if (isset($map['MarkField'])) {
            if (!empty($map['MarkField'])) {
                $model->markField = [];
                $n1               = 0;
                foreach ($map['MarkField'] as $item1) {
                    $model->markField[$n1++] = markField::fromMap($item1);
                }
            }
        }

        if (isset($map['MarkFieldsSource'])) {
            if (!empty($map['MarkFieldsSource'])) {
                $model->markFieldsSource = [];
                $n1                      = 0;
                foreach ($map['MarkFieldsSource'] as $item1) {
                    $model->markFieldsSource[$n1++] = markFieldsSource::fromMap($item1);
                }
            }
        }

        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }

        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
        }

        if (isset($map['UserCanOperate'])) {
            $model->userCanOperate = $map['UserCanOperate'];
        }

        return $model;
    }
}
