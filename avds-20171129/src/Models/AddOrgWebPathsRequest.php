<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class AddOrgWebPathsRequest extends Model
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
    public $URLs;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'orgId'    => 'OrgId',
        'URLs'     => 'URLs',
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
        if (null !== $this->URLs) {
            $res['URLs'] = $this->URLs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOrgWebPathsRequest
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
        if (isset($map['URLs'])) {
            if (!empty($map['URLs'])) {
                $model->URLs = $map['URLs'];
            }
        }

        return $model;
    }
}
