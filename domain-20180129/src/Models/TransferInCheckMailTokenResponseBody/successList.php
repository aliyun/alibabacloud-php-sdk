<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\TransferInCheckMailTokenResponseBody;

use AlibabaCloud\Dara\Model;

class successList extends Model
{
    /**
     * @var string[]
     */
    public $successDomain;
    protected $_name = [
        'successDomain' => 'SuccessDomain',
    ];

    public function validate()
    {
        if (\is_array($this->successDomain)) {
            Model::validateArray($this->successDomain);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->successDomain) {
            if (\is_array($this->successDomain)) {
                $res['SuccessDomain'] = [];
                $n1 = 0;
                foreach ($this->successDomain as $item1) {
                    $res['SuccessDomain'][$n1] = $item1;
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
        if (isset($map['SuccessDomain'])) {
            if (!empty($map['SuccessDomain'])) {
                $model->successDomain = [];
                $n1 = 0;
                foreach ($map['SuccessDomain'] as $item1) {
                    $model->successDomain[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
