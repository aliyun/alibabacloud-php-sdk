<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData;

use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var string[]
     */
    public $domainNames;
    protected $_name = [
        'domainNames' => 'domainNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['domainNames'] = $this->domainNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domainNames'])) {
            if (!empty($map['domainNames'])) {
                $model->domainNames = $map['domainNames'];
            }
        }

        return $model;
    }
}
