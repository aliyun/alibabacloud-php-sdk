<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayVersionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayVersionsResponseBody\smartAGVersions\smartAGVersion;

class smartAGVersions extends Model
{
    /**
     * @var smartAGVersion[]
     */
    public $smartAGVersion;
    protected $_name = [
        'smartAGVersion' => 'SmartAGVersion',
    ];

    public function validate()
    {
        if (\is_array($this->smartAGVersion)) {
            Model::validateArray($this->smartAGVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->smartAGVersion) {
            if (\is_array($this->smartAGVersion)) {
                $res['SmartAGVersion'] = [];
                $n1 = 0;
                foreach ($this->smartAGVersion as $item1) {
                    $res['SmartAGVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SmartAGVersion'])) {
            if (!empty($map['SmartAGVersion'])) {
                $model->smartAGVersion = [];
                $n1 = 0;
                foreach ($map['SmartAGVersion'] as $item1) {
                    $model->smartAGVersion[$n1] = smartAGVersion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
