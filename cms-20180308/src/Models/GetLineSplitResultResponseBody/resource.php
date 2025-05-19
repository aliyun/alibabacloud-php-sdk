<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\GetLineSplitResultResponseBody;

use AlibabaCloud\Dara\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $additionalRegex;

    /**
     * @var string
     */
    public $endSplitSymbol;

    /**
     * @var string
     */
    public $regex;

    /**
     * @var string[]
     */
    public $regexSplitResult;

    /**
     * @var string
     */
    public $startSplitSymbol;

    /**
     * @var int
     */
    public $startSplitSymbolIndex;
    protected $_name = [
        'additionalRegex' => 'AdditionalRegex',
        'endSplitSymbol' => 'EndSplitSymbol',
        'regex' => 'Regex',
        'regexSplitResult' => 'RegexSplitResult',
        'startSplitSymbol' => 'StartSplitSymbol',
        'startSplitSymbolIndex' => 'StartSplitSymbolIndex',
    ];

    public function validate()
    {
        if (\is_array($this->regexSplitResult)) {
            Model::validateArray($this->regexSplitResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalRegex) {
            $res['AdditionalRegex'] = $this->additionalRegex;
        }

        if (null !== $this->endSplitSymbol) {
            $res['EndSplitSymbol'] = $this->endSplitSymbol;
        }

        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }

        if (null !== $this->regexSplitResult) {
            if (\is_array($this->regexSplitResult)) {
                $res['RegexSplitResult'] = [];
                $n1 = 0;
                foreach ($this->regexSplitResult as $item1) {
                    $res['RegexSplitResult'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->startSplitSymbol) {
            $res['StartSplitSymbol'] = $this->startSplitSymbol;
        }

        if (null !== $this->startSplitSymbolIndex) {
            $res['StartSplitSymbolIndex'] = $this->startSplitSymbolIndex;
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
        if (isset($map['AdditionalRegex'])) {
            $model->additionalRegex = $map['AdditionalRegex'];
        }

        if (isset($map['EndSplitSymbol'])) {
            $model->endSplitSymbol = $map['EndSplitSymbol'];
        }

        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }

        if (isset($map['RegexSplitResult'])) {
            if (!empty($map['RegexSplitResult'])) {
                $model->regexSplitResult = [];
                $n1 = 0;
                foreach ($map['RegexSplitResult'] as $item1) {
                    $model->regexSplitResult[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StartSplitSymbol'])) {
            $model->startSplitSymbol = $map['StartSplitSymbol'];
        }

        if (isset($map['StartSplitSymbolIndex'])) {
            $model->startSplitSymbolIndex = $map['StartSplitSymbolIndex'];
        }

        return $model;
    }
}
