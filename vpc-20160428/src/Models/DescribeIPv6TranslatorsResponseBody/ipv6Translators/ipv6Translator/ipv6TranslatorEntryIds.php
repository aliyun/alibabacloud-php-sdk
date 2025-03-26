<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponseBody\ipv6Translators\ipv6Translator;

use AlibabaCloud\Dara\Model;

class ipv6TranslatorEntryIds extends Model
{
    /**
     * @var string[]
     */
    public $ipv6TranslatorEntryId;
    protected $_name = [
        'ipv6TranslatorEntryId' => 'Ipv6TranslatorEntryId',
    ];

    public function validate()
    {
        if (\is_array($this->ipv6TranslatorEntryId)) {
            Model::validateArray($this->ipv6TranslatorEntryId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6TranslatorEntryId) {
            if (\is_array($this->ipv6TranslatorEntryId)) {
                $res['Ipv6TranslatorEntryId'] = [];
                $n1 = 0;
                foreach ($this->ipv6TranslatorEntryId as $item1) {
                    $res['Ipv6TranslatorEntryId'][$n1++] = $item1;
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
        if (isset($map['Ipv6TranslatorEntryId'])) {
            if (!empty($map['Ipv6TranslatorEntryId'])) {
                $model->ipv6TranslatorEntryId = [];
                $n1 = 0;
                foreach ($map['Ipv6TranslatorEntryId'] as $item1) {
                    $model->ipv6TranslatorEntryId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
