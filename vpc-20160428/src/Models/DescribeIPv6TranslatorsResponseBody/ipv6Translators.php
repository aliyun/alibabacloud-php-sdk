<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponseBody\ipv6Translators\ipv6Translator;

class ipv6Translators extends Model
{
    /**
     * @var ipv6Translator[]
     */
    public $ipv6Translator;
    protected $_name = [
        'ipv6Translator' => 'Ipv6Translator',
    ];

    public function validate()
    {
        if (\is_array($this->ipv6Translator)) {
            Model::validateArray($this->ipv6Translator);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6Translator) {
            if (\is_array($this->ipv6Translator)) {
                $res['Ipv6Translator'] = [];
                $n1                    = 0;
                foreach ($this->ipv6Translator as $item1) {
                    $res['Ipv6Translator'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv6Translator'])) {
            if (!empty($map['Ipv6Translator'])) {
                $model->ipv6Translator = [];
                $n1                    = 0;
                foreach ($map['Ipv6Translator'] as $item1) {
                    $model->ipv6Translator[$n1++] = ipv6Translator::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
