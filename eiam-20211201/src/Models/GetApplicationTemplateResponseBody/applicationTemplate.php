<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationTemplateResponseBody\applicationTemplate\saleInfo;

class applicationTemplate extends Model
{
    /**
     * @var string
     */
    public $applicationTemplateId;

    /**
     * @var string
     */
    public $applicationTemplateName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $helpDocumentUrl;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $managedServiceCode;

    /**
     * @var saleInfo
     */
    public $saleInfo;

    /**
     * @var string
     */
    public $serviceConsoleUrl;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var string[]
     */
    public $ssoTypes;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'applicationTemplateId' => 'ApplicationTemplateId',
        'applicationTemplateName' => 'ApplicationTemplateName',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'helpDocumentUrl' => 'HelpDocumentUrl',
        'logoUrl' => 'LogoUrl',
        'managedServiceCode' => 'ManagedServiceCode',
        'saleInfo' => 'SaleInfo',
        'serviceConsoleUrl' => 'ServiceConsoleUrl',
        'serviceManaged' => 'ServiceManaged',
        'ssoTypes' => 'SsoTypes',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->saleInfo) {
            $this->saleInfo->validate();
        }
        if (\is_array($this->ssoTypes)) {
            Model::validateArray($this->ssoTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationTemplateId) {
            $res['ApplicationTemplateId'] = $this->applicationTemplateId;
        }

        if (null !== $this->applicationTemplateName) {
            $res['ApplicationTemplateName'] = $this->applicationTemplateName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->helpDocumentUrl) {
            $res['HelpDocumentUrl'] = $this->helpDocumentUrl;
        }

        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }

        if (null !== $this->managedServiceCode) {
            $res['ManagedServiceCode'] = $this->managedServiceCode;
        }

        if (null !== $this->saleInfo) {
            $res['SaleInfo'] = null !== $this->saleInfo ? $this->saleInfo->toArray($noStream) : $this->saleInfo;
        }

        if (null !== $this->serviceConsoleUrl) {
            $res['ServiceConsoleUrl'] = $this->serviceConsoleUrl;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->ssoTypes) {
            if (\is_array($this->ssoTypes)) {
                $res['SsoTypes'] = [];
                $n1 = 0;
                foreach ($this->ssoTypes as $item1) {
                    $res['SsoTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ApplicationTemplateId'])) {
            $model->applicationTemplateId = $map['ApplicationTemplateId'];
        }

        if (isset($map['ApplicationTemplateName'])) {
            $model->applicationTemplateName = $map['ApplicationTemplateName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HelpDocumentUrl'])) {
            $model->helpDocumentUrl = $map['HelpDocumentUrl'];
        }

        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }

        if (isset($map['ManagedServiceCode'])) {
            $model->managedServiceCode = $map['ManagedServiceCode'];
        }

        if (isset($map['SaleInfo'])) {
            $model->saleInfo = saleInfo::fromMap($map['SaleInfo']);
        }

        if (isset($map['ServiceConsoleUrl'])) {
            $model->serviceConsoleUrl = $map['ServiceConsoleUrl'];
        }

        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }

        if (isset($map['SsoTypes'])) {
            if (!empty($map['SsoTypes'])) {
                $model->ssoTypes = [];
                $n1 = 0;
                foreach ($map['SsoTypes'] as $item1) {
                    $model->ssoTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
