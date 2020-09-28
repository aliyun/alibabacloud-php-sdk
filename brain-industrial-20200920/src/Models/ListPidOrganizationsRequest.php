<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class ListPidOrganizationsRequest extends Model
{
    /**
     * @var string
     */
    public $parentOrganizationId;
    protected $_name = [
        'parentOrganizationId' => 'ParentOrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentOrganizationId) {
            $res['ParentOrganizationId'] = $this->parentOrganizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPidOrganizationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentOrganizationId'])) {
            $model->parentOrganizationId = $map['ParentOrganizationId'];
        }

        return $model;
    }
}
