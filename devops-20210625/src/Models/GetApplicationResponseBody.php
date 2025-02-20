<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class GetApplicationResponseBody extends Model
{
    /**
     * @var string
     */
    public $appTemplateDisplayName;
    /**
     * @var string
     */
    public $appTemplateName;
    /**
     * @var string
     */
    public $creatorAccountId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $name;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
