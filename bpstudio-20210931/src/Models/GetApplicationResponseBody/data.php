<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data\checklist;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data\complianceList;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data\priceList;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data\resourceList;

class data extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var checklist[]
     */
    public $checklist;

    /**
     * @var complianceList[]
     */
    public $complianceList;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var float
     */
    public $deployPercent;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $name;

    /**
     * @var priceList[]
     */
    public $priceList;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'checklist' => 'Checklist',
        'complianceList' => 'ComplianceList',
        'createTime' => 'CreateTime',
        'deployPercent' => 'DeployPercent',
        'description' => 'Description',
        'error' => 'Error',
        'imageURL' => 'ImageURL',
        'name' => 'Name',
        'priceList' => 'PriceList',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceList' => 'ResourceList',
        'status' => 'Status',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->checklist)) {
            Model::validateArray($this->checklist);
        }
        if (\is_array($this->complianceList)) {
            Model::validateArray($this->complianceList);
        }
        if (\is_array($this->priceList)) {
            Model::validateArray($this->priceList);
        }
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->checklist) {
            if (\is_array($this->checklist)) {
                $res['Checklist'] = [];
                $n1 = 0;
                foreach ($this->checklist as $item1) {
                    $res['Checklist'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->complianceList) {
            if (\is_array($this->complianceList)) {
                $res['ComplianceList'] = [];
                $n1 = 0;
                foreach ($this->complianceList as $item1) {
                    $res['ComplianceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deployPercent) {
            $res['DeployPercent'] = $this->deployPercent;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->priceList) {
            if (\is_array($this->priceList)) {
                $res['PriceList'] = [];
                $n1 = 0;
                foreach ($this->priceList as $item1) {
                    $res['PriceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['ResourceList'] = [];
                $n1 = 0;
                foreach ($this->resourceList as $item1) {
                    $res['ResourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Checklist'])) {
            if (!empty($map['Checklist'])) {
                $model->checklist = [];
                $n1 = 0;
                foreach ($map['Checklist'] as $item1) {
                    $model->checklist[$n1] = checklist::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ComplianceList'])) {
            if (!empty($map['ComplianceList'])) {
                $model->complianceList = [];
                $n1 = 0;
                foreach ($map['ComplianceList'] as $item1) {
                    $model->complianceList[$n1] = complianceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DeployPercent'])) {
            $model->deployPercent = $map['DeployPercent'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PriceList'])) {
            if (!empty($map['PriceList'])) {
                $model->priceList = [];
                $n1 = 0;
                foreach ($map['PriceList'] as $item1) {
                    $model->priceList[$n1] = priceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n1 = 0;
                foreach ($map['ResourceList'] as $item1) {
                    $model->resourceList[$n1] = resourceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
