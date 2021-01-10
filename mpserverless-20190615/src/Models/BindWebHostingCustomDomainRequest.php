<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class BindWebHostingCustomDomainRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $customDomain;
    protected $_name = [
        'spaceId'      => 'SpaceId',
        'customDomain' => 'CustomDomain',
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
        if (null !== $this->customDomain) {
            $res['CustomDomain'] = $this->customDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindWebHostingCustomDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['CustomDomain'])) {
            $model->customDomain = $map['CustomDomain'];
        }

        return $model;
    }
}
