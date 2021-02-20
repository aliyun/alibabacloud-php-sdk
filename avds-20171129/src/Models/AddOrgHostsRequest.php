<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class AddOrgHostsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $orgId;

    /**
     * @var string[]
     */
    public $hosts;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'orgId'    => 'OrgId',
        'hosts'    => 'Hosts',
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
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->hosts) {
            $res['Hosts'] = $this->hosts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOrgHostsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = $map['Hosts'];
            }
        }

        return $model;
    }
}
