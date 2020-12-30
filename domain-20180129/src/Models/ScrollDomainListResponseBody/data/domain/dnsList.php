<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListResponseBody\data\domain;

use AlibabaCloud\Tea\Model;

class dnsList extends Model
{
    /**
     * @var string[]
     */
    public $dns;
    protected $_name = [
        'dns' => 'Dns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dns) {
            $res['Dns'] = $this->dns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dns'])) {
            if (!empty($map['Dns'])) {
                $model->dns = $map['Dns'];
            }
        }

        return $model;
    }
}
