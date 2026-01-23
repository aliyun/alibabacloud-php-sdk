<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardTemplateRequest\createCommand\codeRuleConfig\autoConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardTemplateRequest\createCommand\codeRuleConfig\autoConfig\codeRuleList\autoIncrementSequenceConfig;

class codeRuleList extends Model
{
    /**
     * @var autoIncrementSequenceConfig
     */
    public $autoIncrementSequenceConfig;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'autoIncrementSequenceConfig' => 'AutoIncrementSequenceConfig',
        'index' => 'Index',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->autoIncrementSequenceConfig) {
            $this->autoIncrementSequenceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoIncrementSequenceConfig) {
            $res['AutoIncrementSequenceConfig'] = null !== $this->autoIncrementSequenceConfig ? $this->autoIncrementSequenceConfig->toArray($noStream) : $this->autoIncrementSequenceConfig;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['AutoIncrementSequenceConfig'])) {
            $model->autoIncrementSequenceConfig = autoIncrementSequenceConfig::fromMap($map['AutoIncrementSequenceConfig']);
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
