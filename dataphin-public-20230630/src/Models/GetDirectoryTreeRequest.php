<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetDirectoryTreeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example codeManage
     *
     * @var string
     */
    public $category;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @example 7081229106458752
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'category' => 'Category',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDirectoryTreeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
