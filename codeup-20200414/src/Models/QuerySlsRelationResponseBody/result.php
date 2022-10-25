<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\QuerySlsRelationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $aliyunUserId;

    /**
     * @var int
     */
    public $codeupProjectId;

    /**
     * @var bool
     */
    public $defaultViewer;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $slsLogStore;

    /**
     * @var string
     */
    public $slsProject;
    protected $_name = [
        'aliyunUserId'    => 'aliyunUserId',
        'codeupProjectId' => 'codeupProjectId',
        'defaultViewer'   => 'defaultViewer',
        'organizationId'  => 'organizationId',
        'slsLogStore'     => 'slsLogStore',
        'slsProject'      => 'slsProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUserId) {
            $res['aliyunUserId'] = $this->aliyunUserId;
        }
        if (null !== $this->codeupProjectId) {
            $res['codeupProjectId'] = $this->codeupProjectId;
        }
        if (null !== $this->defaultViewer) {
            $res['defaultViewer'] = $this->defaultViewer;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunUserId'])) {
            $model->aliyunUserId = $map['aliyunUserId'];
        }
        if (isset($map['codeupProjectId'])) {
            $model->codeupProjectId = $map['codeupProjectId'];
        }
        if (isset($map['defaultViewer'])) {
            $model->defaultViewer = $map['defaultViewer'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
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
