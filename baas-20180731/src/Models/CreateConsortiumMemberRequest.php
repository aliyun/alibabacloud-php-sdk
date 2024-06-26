<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\SDK\Baas\V20180731\Models\CreateConsortiumMemberRequest\organization;
use AlibabaCloud\Tea\Model;

class CreateConsortiumMemberRequest extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description This parameter is required.
     *
     * @example consortium-aaaaaa-akpcsjjac2jd
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @description This parameter is required.
     *
     * @var organization[]
     */
    public $organization;
    protected $_name = [
        'code'         => 'Code',
        'consortiumId' => 'ConsortiumId',
        'organization' => 'Organization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->organization) {
            $res['Organization'] = [];
            if (null !== $this->organization && \is_array($this->organization)) {
                $n = 0;
                foreach ($this->organization as $item) {
                    $res['Organization'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsortiumMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['Organization'])) {
            if (!empty($map['Organization'])) {
                $model->organization = [];
                $n                   = 0;
                foreach ($map['Organization'] as $item) {
                    $model->organization[$n++] = null !== $item ? organization::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
