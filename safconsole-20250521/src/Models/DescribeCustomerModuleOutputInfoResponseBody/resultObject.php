<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleOutputInfoResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
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
    public $testFile;
    protected $_name = [
        'finalScoreFormat' => 'FinalScoreFormat',
        'processExpression' => 'ProcessExpression',
        'testFile' => 'TestFile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finalScoreFormat) {
            $res['FinalScoreFormat'] = $this->finalScoreFormat;
        }

        if (null !== $this->processExpression) {
            $res['ProcessExpression'] = $this->processExpression;
        }

        if (null !== $this->testFile) {
            $res['TestFile'] = $this->testFile;
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
        if (isset($map['FinalScoreFormat'])) {
            $model->finalScoreFormat = $map['FinalScoreFormat'];
        }

        if (isset($map['ProcessExpression'])) {
            $model->processExpression = $map['ProcessExpression'];
        }

        if (isset($map['TestFile'])) {
            $model->testFile = $map['TestFile'];
        }

        return $model;
    }
}
