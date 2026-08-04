<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetDingTalkUserOrgByAliyunTmpCodeResponseBody\data;

use AlibabaCloud\Dara\Model;

class orgDtoList extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;
    protected $_name = [
        'corpId' => 'CorpId',
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        return $model;
    }
}
