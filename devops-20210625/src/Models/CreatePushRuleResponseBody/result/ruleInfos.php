<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreatePushRuleResponseBody\result;

use AlibabaCloud\Tea\Model;

class ruleInfos extends Model
{
    /**
     * @example ForcePushChecker
     *
     * @var string
     */
    public $checkerName;

    /**
     * @example warn
     *
     * @var string
     */
    public $checkerType;

    /**
     * @example disabled
     *
     * @var string
     */
    public $extraMessage;

    /**
     * @var string[]
     */
    public $fileRuleRegexes;
    protected $_name = [
        'checkerName'     => 'checkerName',
        'checkerType'     => 'checkerType',
        'extraMessage'    => 'extraMessage',
        'fileRuleRegexes' => 'fileRuleRegexes',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['fileRuleRegexes'] = $this->fileRuleRegexes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleInfos
     */
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
                $model->fileRuleRegexes = $map['fileRuleRegexes'];
            }
        }

        return $model;
    }
}
