<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribePolicyAdvancedConfigResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $eips;

    /**
     * @var string
     */
    public $internetSwitch;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eips' => 'Eips',
        'internetSwitch' => 'InternetSwitch',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->eips)) {
            Model::validateArray($this->eips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eips) {
            if (\is_array($this->eips)) {
                $res['Eips'] = [];
                $n1 = 0;
                foreach ($this->eips as $item1) {
                    $res['Eips'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->internetSwitch) {
            $res['InternetSwitch'] = $this->internetSwitch;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Eips'])) {
            if (!empty($map['Eips'])) {
                $model->eips = [];
                $n1 = 0;
                foreach ($map['Eips'] as $item1) {
                    $model->eips[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InternetSwitch'])) {
            $model->internetSwitch = $map['InternetSwitch'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
