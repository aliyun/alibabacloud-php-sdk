<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class RefreshWebHostingCustomDomainCacheRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'domainName' => 'DomainName',
        'spaceId'    => 'SpaceId',
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
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshWebHostingCustomDomainCacheRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
