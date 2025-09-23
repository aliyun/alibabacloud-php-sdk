<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitDocTranslateTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitDocTranslateTaskRequest\ext\terminologies;

class ext extends Model
{
    /**
     * @var string
     */
    public $domainHint;

    /**
     * @var terminologies[]
     */
    public $terminologies;
    protected $_name = [
        'domainHint' => 'domainHint',
        'terminologies' => 'terminologies',
    ];

    public function validate()
    {
        if (\is_array($this->terminologies)) {
            Model::validateArray($this->terminologies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainHint) {
            $res['domainHint'] = $this->domainHint;
        }

        if (null !== $this->terminologies) {
            if (\is_array($this->terminologies)) {
                $res['terminologies'] = [];
                $n1 = 0;
                foreach ($this->terminologies as $item1) {
                    $res['terminologies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['domainHint'])) {
            $model->domainHint = $map['domainHint'];
        }

        if (isset($map['terminologies'])) {
            if (!empty($map['terminologies'])) {
                $model->terminologies = [];
                $n1 = 0;
                foreach ($map['terminologies'] as $item1) {
                    $model->terminologies[$n1] = terminologies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
