<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryDomainTransferStatusResponseBody;

use AlibabaCloud\Tea\Model;

class domainTransferStatus extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainStatusDescription;
    protected $_name = [
        'domainName'              => 'DomainName',
        'domainStatusDescription' => 'DomainStatusDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainStatusDescription) {
            $res['DomainStatusDescription'] = $this->domainStatusDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainTransferStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainStatusDescription'])) {
            $model->domainStatusDescription = $map['DomainStatusDescription'];
        }

        return $model;
    }
}
