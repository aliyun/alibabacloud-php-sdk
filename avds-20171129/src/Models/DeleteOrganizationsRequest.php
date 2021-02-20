<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class DeleteOrganizationsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string[]
     */
    public $orgIds;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'orgIds'   => 'OrgIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->orgIds) {
            $res['OrgIds'] = $this->orgIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteOrganizationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['OrgIds'])) {
            if (!empty($map['OrgIds'])) {
                $model->orgIds = $map['OrgIds'];
            }
        }

        return $model;
    }
}
