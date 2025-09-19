<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailResponseBody\checkDetailColumns;

class DescribeCheckWarningDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $advice;

    /**
     * @var string[][]
     */
    public $checkDetailAssetInfo;

    /**
     * @var checkDetailColumns[]
     */
    public $checkDetailColumns;

    /**
     * @var int
     */
    public $checkId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $item;

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
    public $requestId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'advice' => 'Advice',
        'checkDetailAssetInfo' => 'CheckDetailAssetInfo',
        'checkDetailColumns' => 'CheckDetailColumns',
        'checkId' => 'CheckId',
        'description' => 'Description',
        'item' => 'Item',
        'level' => 'Level',
        'prompt' => 'Prompt',
        'requestId' => 'RequestId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->checkDetailAssetInfo)) {
            Model::validateArray($this->checkDetailAssetInfo);
        }
        if (\is_array($this->checkDetailColumns)) {
            Model::validateArray($this->checkDetailColumns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }

        if (null !== $this->checkDetailAssetInfo) {
            if (\is_array($this->checkDetailAssetInfo)) {
                $res['CheckDetailAssetInfo'] = [];
                $n1 = 0;
                foreach ($this->checkDetailAssetInfo as $item1) {
                    if (\is_array($item1)) {
                        $res['CheckDetailAssetInfo'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['CheckDetailAssetInfo'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkDetailColumns) {
            if (\is_array($this->checkDetailColumns)) {
                $res['CheckDetailColumns'] = [];
                $n1 = 0;
                foreach ($this->checkDetailColumns as $item1) {
                    $res['CheckDetailColumns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }

        if (isset($map['CheckDetailAssetInfo'])) {
            if (!empty($map['CheckDetailAssetInfo'])) {
                $model->checkDetailAssetInfo = [];
                $n1 = 0;
                foreach ($map['CheckDetailAssetInfo'] as $item1) {
                    if (!empty($item1)) {
                        $model->checkDetailAssetInfo[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->checkDetailAssetInfo[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckDetailColumns'])) {
            if (!empty($map['CheckDetailColumns'])) {
                $model->checkDetailColumns = [];
                $n1 = 0;
                foreach ($map['CheckDetailColumns'] as $item1) {
                    $model->checkDetailColumns[$n1] = checkDetailColumns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
