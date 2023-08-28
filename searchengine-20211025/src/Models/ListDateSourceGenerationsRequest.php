<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListDateSourceGenerationsRequest extends Model
{
    /**
     * @example bj_vpc_domain_1
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Obtains the data restoration version of a data source.
     *
     * @example true
     *
     * @var bool
     */
    public $validStatus;
    protected $_name = [
        'domainName'  => 'domainName',
        'validStatus' => 'validStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->validStatus) {
            $res['validStatus'] = $this->validStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDateSourceGenerationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['validStatus'])) {
            $model->validStatus = $map['validStatus'];
        }

        return $model;
    }
}
