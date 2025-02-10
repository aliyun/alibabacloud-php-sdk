<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesResponseBody\ipv6TranslatorEntries\ipv6TranslatorEntry;

class ipv6TranslatorEntries extends Model
{
    /**
     * @var ipv6TranslatorEntry[]
     */
    public $ipv6TranslatorEntry;
    protected $_name = [
        'ipv6TranslatorEntry' => 'Ipv6TranslatorEntry',
    ];

    public function validate()
    {
        if (\is_array($this->ipv6TranslatorEntry)) {
            Model::validateArray($this->ipv6TranslatorEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6TranslatorEntry) {
            if (\is_array($this->ipv6TranslatorEntry)) {
                $res['Ipv6TranslatorEntry'] = [];
                $n1                         = 0;
                foreach ($this->ipv6TranslatorEntry as $item1) {
                    $res['Ipv6TranslatorEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv6TranslatorEntry'])) {
            if (!empty($map['Ipv6TranslatorEntry'])) {
                $model->ipv6TranslatorEntry = [];
                $n1                         = 0;
                foreach ($map['Ipv6TranslatorEntry'] as $item1) {
                    $model->ipv6TranslatorEntry[$n1++] = ipv6TranslatorEntry::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
