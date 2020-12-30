<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models;

use AlibabaCloud\Tea\Model;

class CreateDevopsOrgRequest extends Model
{
    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $realPk;

    /**
     * @var int
     */
    public $desiredMemberCount;
    protected $_name = [
        'orgName'            => 'OrgName',
        'source'             => 'Source',
        'realPk'             => 'RealPk',
        'desiredMemberCount' => 'DesiredMemberCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->realPk) {
            $res['RealPk'] = $this->realPk;
        }
        if (null !== $this->desiredMemberCount) {
            $res['DesiredMemberCount'] = $this->desiredMemberCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDevopsOrgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['RealPk'])) {
            $model->realPk = $map['RealPk'];
        }
        if (isset($map['DesiredMemberCount'])) {
            $model->desiredMemberCount = $map['DesiredMemberCount'];
        }

        return $model;
    }
}
