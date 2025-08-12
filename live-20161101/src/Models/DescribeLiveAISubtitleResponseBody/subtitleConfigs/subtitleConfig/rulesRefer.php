<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs\subtitleConfig;

use AlibabaCloud\Dara\Model;

class rulesRefer extends Model
{
    /**
     * @var string[]
     */
    public $rulesId;
    protected $_name = [
        'rulesId' => 'RulesId',
    ];

    public function validate()
    {
        if (\is_array($this->rulesId)) {
            Model::validateArray($this->rulesId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rulesId) {
            if (\is_array($this->rulesId)) {
                $res['RulesId'] = [];
                $n1 = 0;
                foreach ($this->rulesId as $item1) {
                    $res['RulesId'][$n1] = $item1;
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
        if (isset($map['RulesId'])) {
            if (!empty($map['RulesId'])) {
                $model->rulesId = [];
                $n1 = 0;
                foreach ($map['RulesId'] as $item1) {
                    $model->rulesId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
