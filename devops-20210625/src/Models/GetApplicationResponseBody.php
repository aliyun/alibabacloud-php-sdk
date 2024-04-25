<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetApplicationResponseBody extends Model
{
    /**
     * @example 应用模版展示名称A
     *
     * @var string
     */
    public $appTemplateDisplayName;

    /**
     * @example 应用模版名称A
     *
     * @var string
     */
    public $appTemplateName;

    /**
     * @example 1332695887xxxxxx
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @example 应用描述
     *
     * @var string
     */
    public $description;

    /**
     * @example 2024-01-01T00:00:00.000+00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example testApp
     *
     * @var string
     */
    public $name;

    /**
     * @example FC93CE1A-8D7A-13A9-8306-7465DE2E5C0F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appTemplateDisplayName' => 'appTemplateDisplayName',
        'appTemplateName'        => 'appTemplateName',
        'creatorAccountId'       => 'creatorAccountId',
        'description'            => 'description',
        'gmtCreate'              => 'gmtCreate',
        'name'                   => 'name',
        'requestId'              => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appTemplateDisplayName) {
            $res['appTemplateDisplayName'] = $this->appTemplateDisplayName;
        }
        if (null !== $this->appTemplateName) {
            $res['appTemplateName'] = $this->appTemplateName;
        }
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appTemplateDisplayName'])) {
            $model->appTemplateDisplayName = $map['appTemplateDisplayName'];
        }
        if (isset($map['appTemplateName'])) {
            $model->appTemplateName = $map['appTemplateName'];
        }
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
