<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataDomainResponseBody;

use AlibabaCloud\Tea\Model;

class createResult extends Model
{
    /**
     * @example 1241844456
     *
     * @var int
     */
    public $dataDomainId;
    protected $_name = [
        'dataDomainId' => 'DataDomainId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDomainId) {
            $res['DataDomainId'] = $this->dataDomainId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDomainId'])) {
            $model->dataDomainId = $map['DataDomainId'];
        }

        return $model;
    }
}
