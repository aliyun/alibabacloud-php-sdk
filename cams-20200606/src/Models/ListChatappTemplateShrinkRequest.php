<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ListChatappTemplateShrinkRequest extends Model
{
    /**
     * @description 审核状态
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description 语言
     *
     * @var string
     */
    public $language;

    /**
     * @description 模板名称
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pageShrink;
    protected $_name = [
        'auditStatus' => 'AuditStatus',
        'language'    => 'Language',
        'name'        => 'Name',
        'pageShrink'  => 'Page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageShrink) {
            $res['Page'] = $this->pageShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChatappTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Page'])) {
            $model->pageShrink = $map['Page'];
        }

        return $model;
    }
}
