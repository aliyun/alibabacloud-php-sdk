<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafUsageOfRulesResponseBody\sites;

class ListWafUsageOfRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sites[]
     */
    public $sites;
    protected $_name = [
        'requestId' => 'RequestId',
        'sites' => 'Sites',
    ];

    public function validate()
    {
        if (\is_array($this->sites)) {
            Model::validateArray($this->sites);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sites) {
            if (\is_array($this->sites)) {
                $res['Sites'] = [];
                $n1 = 0;
                foreach ($this->sites as $item1) {
                    $res['Sites'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Sites'])) {
            if (!empty($map['Sites'])) {
                $model->sites = [];
                $n1 = 0;
                foreach ($map['Sites'] as $item1) {
                    $model->sites[$n1] = sites::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
