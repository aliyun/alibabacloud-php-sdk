<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeWhitelistTemplateResponseBody\data;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description The primary key of the data table.
     *
     * @example 1013
     *
     * @var int
     */
    public $id;

    /**
     * @description The IP addresses.
     *
     * @example 10.1.X.X,2.3.X.X
     *
     * @var string
     */
    public $ips;

    /**
     * @description The ID of the whitelist template.
     *
     * @example 424
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The name of the IP whitelist template.
     *
     * @example template_123
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The user ID.
     *
     * @example 16****
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'id'           => 'Id',
        'ips'          => 'Ips',
        'templateId'   => 'TemplateId',
        'templateName' => 'TemplateName',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
