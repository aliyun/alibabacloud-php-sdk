<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateRequest\page;
use AlibabaCloud\Tea\Model;

class ListChatappTemplateRequest extends Model
{
    /**
     * @description 审核状态
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description ISV客户WabaId
     *
     * @var string
     */
    public $custWabaId;

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
     * @var page
     */
    public $page;
    protected $_name = [
        'auditStatus' => 'AuditStatus',
        'custWabaId'  => 'CustWabaId',
        'language'    => 'Language',
        'name'        => 'Name',
        'page'        => 'Page',
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
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChatappTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        return $model;
    }
}
