<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class IsSlsUserAuthrizedCodeupRequest extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $aliyunSubUserId;

    /**
     * @var string
     */
    public $aliyunUserId;

    /**
     * @var int
     */
    public $codeupProjectId;

    /**
     * @var string
     */
    public $slsLogStore;

    /**
     * @var string
     */
    public $slsProject;
    protected $_name = [
        'organizationId'  => 'OrganizationId',
        'aliyunSubUserId' => 'aliyunSubUserId',
        'aliyunUserId'    => 'aliyunUserId',
        'codeupProjectId' => 'codeupProjectId',
        'slsLogStore'     => 'slsLogStore',
        'slsProject'      => 'slsProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->aliyunSubUserId) {
            $res['aliyunSubUserId'] = $this->aliyunSubUserId;
        }
        if (null !== $this->aliyunUserId) {
            $res['aliyunUserId'] = $this->aliyunUserId;
        }
        if (null !== $this->codeupProjectId) {
            $res['codeupProjectId'] = $this->codeupProjectId;
        }
        if (null !== $this->slsLogStore) {
            $res['slsLogStore'] = $this->slsLogStore;
        }
        if (null !== $this->slsProject) {
            $res['slsProject'] = $this->slsProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsSlsUserAuthrizedCodeupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['aliyunSubUserId'])) {
            $model->aliyunSubUserId = $map['aliyunSubUserId'];
        }
        if (isset($map['aliyunUserId'])) {
            $model->aliyunUserId = $map['aliyunUserId'];
        }
        if (isset($map['codeupProjectId'])) {
            $model->codeupProjectId = $map['codeupProjectId'];
        }
        if (isset($map['slsLogStore'])) {
            $model->slsLogStore = $map['slsLogStore'];
        }
        if (isset($map['slsProject'])) {
            $model->slsProject = $map['slsProject'];
        }

        return $model;
    }
}
