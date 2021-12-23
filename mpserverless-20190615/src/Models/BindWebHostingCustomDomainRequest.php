<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class BindWebHostingCustomDomainRequest extends Model
{
    /**
     * @var string
     */
    public $customDomain;

    /**
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
     * @return BindWebHostingCustomDomainRequest
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
