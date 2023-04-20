<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DeleteCorsDomainRequest extends Model
{
    /**
     * @example 97e3ff58-01e4-****-b975-1805fec34d77
     *
     * @var string
     */
    public $domainId;

    /**
     * @example 0e16bb12-14af-****-b24c-5ac1a9a7bb9f
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'domainId' => 'DomainId',
        'spaceId'  => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCorsDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
