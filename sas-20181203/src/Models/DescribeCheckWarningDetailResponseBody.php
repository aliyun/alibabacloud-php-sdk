<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckWarningDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $checkId;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $advice;
    protected $_name = [
        'item'        => 'Item',
        'type'        => 'Type',
        'description' => 'Description',
        'requestId'   => 'RequestId',
        'checkId'     => 'CheckId',
        'level'       => 'Level',
        'prompt'      => 'Prompt',
        'advice'      => 'Advice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckWarningDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }

        return $model;
    }
}
