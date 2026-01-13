<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomerModuleOutputInfoRequest extends Model
{
    /**
     * @var int
     */
    public $customerModuleId;

    /**
     * @var string
     */
    public $finalScoreFormat;

    /**
     * @var string
     */
    public $processExpression;

    /**
     * @var string
     */
    public $testFileUrl;
    protected $_name = [
        'customerModuleId' => 'CustomerModuleId',
        'finalScoreFormat' => 'FinalScoreFormat',
        'processExpression' => 'ProcessExpression',
        'testFileUrl' => 'TestFileUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerModuleId) {
            $res['CustomerModuleId'] = $this->customerModuleId;
        }

        if (null !== $this->finalScoreFormat) {
            $res['FinalScoreFormat'] = $this->finalScoreFormat;
        }

        if (null !== $this->processExpression) {
            $res['ProcessExpression'] = $this->processExpression;
        }

        if (null !== $this->testFileUrl) {
            $res['TestFileUrl'] = $this->testFileUrl;
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
        if (isset($map['CustomerModuleId'])) {
            $model->customerModuleId = $map['CustomerModuleId'];
        }

        if (isset($map['FinalScoreFormat'])) {
            $model->finalScoreFormat = $map['FinalScoreFormat'];
        }

        if (isset($map['ProcessExpression'])) {
            $model->processExpression = $map['ProcessExpression'];
        }

        if (isset($map['TestFileUrl'])) {
            $model->testFileUrl = $map['TestFileUrl'];
        }

        return $model;
    }
}
