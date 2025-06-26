<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiBackendMatchConditions;

class dnsConfigs extends Model
{
    /**
     * @var string[]
     */
    public $dnsList;

    /**
     * @var HttpApiBackendMatchConditions
     */
    public $match;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'dnsList' => 'dnsList',
        'match' => 'match',
        'weight' => 'weight',
    ];

    public function validate()
    {
        if (\is_array($this->dnsList)) {
            Model::validateArray($this->dnsList);
        }
        if (null !== $this->match) {
            $this->match->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsList) {
            if (\is_array($this->dnsList)) {
                $res['dnsList'] = [];
                $n1 = 0;
                foreach ($this->dnsList as $item1) {
                    $res['dnsList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toArray($noStream) : $this->match;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['dnsList'])) {
            if (!empty($map['dnsList'])) {
                $model->dnsList = [];
                $n1 = 0;
                foreach ($map['dnsList'] as $item1) {
                    $model->dnsList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['match'])) {
            $model->match = HttpApiBackendMatchConditions::fromMap($map['match']);
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
