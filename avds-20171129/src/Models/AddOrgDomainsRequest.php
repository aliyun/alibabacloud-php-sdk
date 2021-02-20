<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class AddOrgDomainsRequest extends Model
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
    public $domains;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'orgId'    => 'OrgId',
        'domains'  => 'Domains',
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
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOrgDomainsRequest
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
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }

        return $model;
    }
}
