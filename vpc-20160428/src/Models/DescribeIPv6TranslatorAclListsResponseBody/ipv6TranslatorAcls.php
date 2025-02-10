<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsResponseBody\ipv6TranslatorAcls\IPv6TranslatorAcl;

class ipv6TranslatorAcls extends Model
{
    /**
     * @var IPv6TranslatorAcl[]
     */
    public $IPv6TranslatorAcl;
    protected $_name = [
        'IPv6TranslatorAcl' => 'IPv6TranslatorAcl',
    ];

    public function validate()
    {
        if (\is_array($this->IPv6TranslatorAcl)) {
            Model::validateArray($this->IPv6TranslatorAcl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IPv6TranslatorAcl) {
            if (\is_array($this->IPv6TranslatorAcl)) {
                $res['IPv6TranslatorAcl'] = [];
                $n1                       = 0;
                foreach ($this->IPv6TranslatorAcl as $item1) {
                    $res['IPv6TranslatorAcl'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IPv6TranslatorAcl'])) {
            if (!empty($map['IPv6TranslatorAcl'])) {
                $model->IPv6TranslatorAcl = [];
                $n1                       = 0;
                foreach ($map['IPv6TranslatorAcl'] as $item1) {
                    $model->IPv6TranslatorAcl[$n1++] = IPv6TranslatorAcl::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
