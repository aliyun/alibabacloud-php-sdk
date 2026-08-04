<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindAllContacterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindAllContacterResponseBody\data\contacterInfo;

class data extends Model
{
    /**
     * @var contacterInfo[]
     */
    public $contacterInfo;
    protected $_name = [
        'contacterInfo' => 'ContacterInfo',
    ];

    public function validate()
    {
        if (\is_array($this->contacterInfo)) {
            Model::validateArray($this->contacterInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contacterInfo) {
            if (\is_array($this->contacterInfo)) {
                $res['ContacterInfo'] = [];
                $n1 = 0;
                foreach ($this->contacterInfo as $item1) {
                    $res['ContacterInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ContacterInfo'])) {
            if (!empty($map['ContacterInfo'])) {
                $model->contacterInfo = [];
                $n1 = 0;
                foreach ($map['ContacterInfo'] as $item1) {
                    $model->contacterInfo[$n1] = contacterInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
