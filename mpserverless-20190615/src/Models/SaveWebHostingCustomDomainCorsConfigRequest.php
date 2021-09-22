<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class SaveWebHostingCustomDomainCorsConfigRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $enableCors;

    /**
     * @var string
     */
    public $accessControlAllowOrigin;
    protected $_name = [
        'spaceId'                  => 'SpaceId',
        'domainName'               => 'DomainName',
        'enableCors'               => 'EnableCors',
        'accessControlAllowOrigin' => 'AccessControlAllowOrigin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->enableCors) {
            $res['EnableCors'] = $this->enableCors;
        }
        if (null !== $this->accessControlAllowOrigin) {
            $res['AccessControlAllowOrigin'] = $this->accessControlAllowOrigin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveWebHostingCustomDomainCorsConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EnableCors'])) {
            $model->enableCors = $map['EnableCors'];
        }
        if (isset($map['AccessControlAllowOrigin'])) {
            $model->accessControlAllowOrigin = $map['AccessControlAllowOrigin'];
        }

        return $model;
    }
}
