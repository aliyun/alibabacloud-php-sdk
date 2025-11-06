<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\ConfirmTransferInEmailResponseBody;

use AlibabaCloud\Dara\Model;

class failList extends Model
{
    /**
     * @var string[]
     */
    public $failDomain;
    protected $_name = [
        'failDomain' => 'FailDomain',
    ];

    public function validate()
    {
        if (\is_array($this->failDomain)) {
            Model::validateArray($this->failDomain);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failDomain) {
            if (\is_array($this->failDomain)) {
                $res['FailDomain'] = [];
                $n1 = 0;
                foreach ($this->failDomain as $item1) {
                    $res['FailDomain'][$n1] = $item1;
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
        if (isset($map['FailDomain'])) {
            if (!empty($map['FailDomain'])) {
                $model->failDomain = [];
                $n1 = 0;
                foreach ($map['FailDomain'] as $item1) {
                    $model->failDomain[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
