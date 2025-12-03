<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePushRuleResponseBody\result;

use AlibabaCloud\Dara\Model;

class ruleInfos extends Model
{
    /**
     * @var string
     */
    public $checkerName;

    /**
     * @var string
     */
    public $checkerType;

    /**
     * @var string
     */
    public $extraMessage;

    /**
     * @var string[]
     */
    public $fileRuleRegexes;
    protected $_name = [
        'checkerName' => 'checkerName',
        'checkerType' => 'checkerType',
        'extraMessage' => 'extraMessage',
        'fileRuleRegexes' => 'fileRuleRegexes',
    ];

    public function validate()
    {
        if (\is_array($this->fileRuleRegexes)) {
            Model::validateArray($this->fileRuleRegexes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkerName) {
            $res['checkerName'] = $this->checkerName;
        }

        if (null !== $this->checkerType) {
            $res['checkerType'] = $this->checkerType;
        }

        if (null !== $this->extraMessage) {
            $res['extraMessage'] = $this->extraMessage;
        }

        if (null !== $this->fileRuleRegexes) {
            if (\is_array($this->fileRuleRegexes)) {
                $res['fileRuleRegexes'] = [];
                $n1 = 0;
                foreach ($this->fileRuleRegexes as $item1) {
                    $res['fileRuleRegexes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['checkerName'])) {
            $model->checkerName = $map['checkerName'];
        }

        if (isset($map['checkerType'])) {
            $model->checkerType = $map['checkerType'];
        }

        if (isset($map['extraMessage'])) {
            $model->extraMessage = $map['extraMessage'];
        }

        if (isset($map['fileRuleRegexes'])) {
            if (!empty($map['fileRuleRegexes'])) {
                $model->fileRuleRegexes = [];
                $n1 = 0;
                foreach ($map['fileRuleRegexes'] as $item1) {
                    $model->fileRuleRegexes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
