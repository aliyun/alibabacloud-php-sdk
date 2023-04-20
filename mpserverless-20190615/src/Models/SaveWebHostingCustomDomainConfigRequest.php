<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class SaveWebHostingCustomDomainConfigRequest extends Model
{
    /**
     * @example www.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example HTTPS_FORCE
     *
     * @var string
     */
    public $forceRedirectType;

    /**
     * @example 0e16bb12-14af-4635-b24c-5ac1a9a*****
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'domainName'        => 'DomainName',
        'forceRedirectType' => 'ForceRedirectType',
        'spaceId'           => 'SpaceId',
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
        if (null !== $this->forceRedirectType) {
            $res['ForceRedirectType'] = $this->forceRedirectType;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveWebHostingCustomDomainConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ForceRedirectType'])) {
            $model->forceRedirectType = $map['ForceRedirectType'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
