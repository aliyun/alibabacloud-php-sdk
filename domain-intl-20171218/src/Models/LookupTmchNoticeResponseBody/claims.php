<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeResponseBody;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeResponseBody\claims\claim;
use AlibabaCloud\Tea\Model;

class claims extends Model
{
    /**
     * @var claim[]
     */
    public $claim;
    protected $_name = [
        'claim' => 'Claim',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->claim) {
            $res['Claim'] = [];
            if (null !== $this->claim && \is_array($this->claim)) {
                $n = 0;
                foreach ($this->claim as $item) {
                    $res['Claim'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return claims
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Claim'])) {
            if (!empty($map['Claim'])) {
                $model->claim = [];
                $n            = 0;
                foreach ($map['Claim'] as $item) {
                    $model->claim[$n++] = null !== $item ? claim::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
