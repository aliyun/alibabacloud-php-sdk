<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class GetWebHostingCertificateDetailRequest extends Model
{
    /**
     * @example www.example.com
     *
     * @var string
     */
    public $customDomain;

    /**
     * @example 0e16bb12-14af-4635-b24c-5ac1a9a7bb9f
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'customDomain' => 'CustomDomain',
        'spaceId'      => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customDomain) {
            $res['CustomDomain'] = $this->customDomain;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebHostingCertificateDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomDomain'])) {
            $model->customDomain = $map['CustomDomain'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
