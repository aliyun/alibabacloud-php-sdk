<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody\cves;

class DescribeVulDetailsResponseBody extends Model
{
    /**
     * @var cves[]
     */
    public $cves;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cves' => 'Cves',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cves)) {
            Model::validateArray($this->cves);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cves) {
            if (\is_array($this->cves)) {
                $res['Cves'] = [];
                $n1 = 0;
                foreach ($this->cves as $item1) {
                    $res['Cves'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Cves'])) {
            if (!empty($map['Cves'])) {
                $model->cves = [];
                $n1 = 0;
                foreach ($map['Cves'] as $item1) {
                    $model->cves[$n1] = cves::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
