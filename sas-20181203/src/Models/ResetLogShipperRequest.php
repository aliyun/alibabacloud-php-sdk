<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ResetLogShipperRequest\logMetaList;

class ResetLogShipperRequest extends Model
{
    /**
     * @var int
     */
    public $hotTtl;

    /**
     * @var logMetaList[]
     */
    public $logMetaList;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'hotTtl' => 'HotTtl',
        'logMetaList' => 'LogMetaList',
        'ttl' => 'Ttl',
    ];

    public function validate()
    {
        if (\is_array($this->logMetaList)) {
            Model::validateArray($this->logMetaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotTtl) {
            $res['HotTtl'] = $this->hotTtl;
        }

        if (null !== $this->logMetaList) {
            if (\is_array($this->logMetaList)) {
                $res['LogMetaList'] = [];
                $n1 = 0;
                foreach ($this->logMetaList as $item1) {
                    $res['LogMetaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
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
        if (isset($map['HotTtl'])) {
            $model->hotTtl = $map['HotTtl'];
        }

        if (isset($map['LogMetaList'])) {
            if (!empty($map['LogMetaList'])) {
                $model->logMetaList = [];
                $n1 = 0;
                foreach ($map['LogMetaList'] as $item1) {
                    $model->logMetaList[$n1] = logMetaList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
