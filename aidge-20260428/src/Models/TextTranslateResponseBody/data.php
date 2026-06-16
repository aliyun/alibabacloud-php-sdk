<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\TextTranslateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\TextTranslateResponseBody\data\translations;

class data extends Model
{
    /**
     * @var translations[]
     */
    public $translations;

    /**
     * @var int[]
     */
    public $usageMap;
    protected $_name = [
        'translations' => 'Translations',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (\is_array($this->translations)) {
            Model::validateArray($this->translations);
        }
        if (\is_array($this->usageMap)) {
            Model::validateArray($this->usageMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->translations) {
            if (\is_array($this->translations)) {
                $res['Translations'] = [];
                $n1 = 0;
                foreach ($this->translations as $item1) {
                    $res['Translations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usageMap) {
            if (\is_array($this->usageMap)) {
                $res['UsageMap'] = [];
                foreach ($this->usageMap as $key1 => $value1) {
                    $res['UsageMap'][$key1] = $value1;
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
        if (isset($map['Translations'])) {
            if (!empty($map['Translations'])) {
                $model->translations = [];
                $n1 = 0;
                foreach ($map['Translations'] as $item1) {
                    $model->translations[$n1] = translations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UsageMap'])) {
            if (!empty($map['UsageMap'])) {
                $model->usageMap = [];
                foreach ($map['UsageMap'] as $key1 => $value1) {
                    $model->usageMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
