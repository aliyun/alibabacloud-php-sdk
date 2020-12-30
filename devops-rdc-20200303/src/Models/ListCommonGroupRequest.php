<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class ListCommonGroupRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $smartGroupId;

    /**
     * @var bool
     */
    public $all;
    protected $_name = [
        'orgId'        => 'OrgId',
        'projectId'    => 'ProjectId',
        'smartGroupId' => 'SmartGroupId',
        'all'          => 'All',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->smartGroupId) {
            $res['SmartGroupId'] = $this->smartGroupId;
        }
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCommonGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SmartGroupId'])) {
            $model->smartGroupId = $map['SmartGroupId'];
        }
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }

        return $model;
    }
}
