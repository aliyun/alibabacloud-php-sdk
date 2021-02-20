<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class AddOrgSubdomainsRequest extends Model
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
    public $subdomains;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'orgId'      => 'OrgId',
        'subdomains' => 'Subdomains',
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
        if (null !== $this->subdomains) {
            $res['Subdomains'] = $this->subdomains;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOrgSubdomainsRequest
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
        if (isset($map['Subdomains'])) {
            if (!empty($map['Subdomains'])) {
                $model->subdomains = $map['Subdomains'];
            }
        }

        return $model;
    }
}
