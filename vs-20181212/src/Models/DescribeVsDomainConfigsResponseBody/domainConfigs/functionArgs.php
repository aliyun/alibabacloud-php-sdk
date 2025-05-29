<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainConfigsResponseBody\domainConfigs;

use AlibabaCloud\Dara\Model;

class functionArgs extends Model
{
    /**
     * @var string
     */
    public $argName;

    /**
     * @var string
     */
    public $argValue;
    protected $_name = [
        'argName' => 'ArgName',
        'argValue' => 'ArgValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->argName) {
            $res['ArgName'] = $this->argName;
        }

        if (null !== $this->argValue) {
            $res['ArgValue'] = $this->argValue;
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
        if (isset($map['ArgName'])) {
            $model->argName = $map['ArgName'];
        }

        if (isset($map['ArgValue'])) {
            $model->argValue = $map['ArgValue'];
        }

        return $model;
    }
}
