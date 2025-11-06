<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim;

class claims extends Model
{
    /**
     * @var claim[]
     */
    public $claim;
    protected $_name = [
        'claim' => 'Claim',
    ];

    public function validate()
    {
        if (\is_array($this->claim)) {
            Model::validateArray($this->claim);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->claim) {
            if (\is_array($this->claim)) {
                $res['Claim'] = [];
                $n1 = 0;
                foreach ($this->claim as $item1) {
                    $res['Claim'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Claim'])) {
            if (!empty($map['Claim'])) {
                $model->claim = [];
                $n1 = 0;
                foreach ($map['Claim'] as $item1) {
                    $model->claim[$n1] = claim::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
