<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainNamesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $domainNames;
    protected $_name = [
        'domainNames' => 'DomainNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            if (!empty($map['DomainNames'])) {
                $model->domainNames = $map['DomainNames'];
            }
        }

        return $model;
    }
}
