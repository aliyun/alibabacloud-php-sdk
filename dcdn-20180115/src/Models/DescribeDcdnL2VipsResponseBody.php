<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class DescribeDcdnL2VipsResponseBody extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $vips;
    protected $_name = [
        'domainName' => 'DomainName',
        'requestId' => 'RequestId',
        'vips' => 'Vips',
    ];

    public function validate()
    {
        if (\is_array($this->vips)) {
            Model::validateArray($this->vips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vips) {
            if (\is_array($this->vips)) {
                $res['Vips'] = [];
                $n1 = 0;
                foreach ($this->vips as $item1) {
                    $res['Vips'][$n1] = $item1;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Vips'])) {
            if (!empty($map['Vips'])) {
                $model->vips = [];
                $n1 = 0;
                foreach ($map['Vips'] as $item1) {
                    $model->vips[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
