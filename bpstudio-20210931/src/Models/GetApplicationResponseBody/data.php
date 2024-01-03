<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data\checklist;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data\priceList;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data\resourceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The description of the application.
     *
     * @example VVK605ZH00OA4MRT
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The resource tag.
     *
     * @var checklist[]
     */
    public $checklist;

    /**
     * @description The URL of the application topology image.
     *
     * @example 2021-08-09 14:37:16
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The message returned for the request.
     *
     * @example remark
     *
     * @var string
     */
    public $description;

    /**
     * @description The resource type.
     *
     * @example Success
     *
     * @var string
     */
    public $error;

    /**
     * @description The URL of the image in the database.
     *
     * @example The details of the application.
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description The URL of the image in the database.
     *
     * @example 1411182597819805/sr-8DWU4RUS49NIDII0.png
     *
     * @var string
     */
    public $name;

    /**
     * @description The billing results.
     *
     * @var priceList[]
     */
    public $priceList;

    /**
     * @description 1411182597819805/topo-MCEXDI5EL2OM10NY.json
     *
     * @example rg-aekzhfgmw4e6fwq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The resource specification.
     *
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @description Verification passed
     *
     * @example Deployed_Success
     *
     * @var string
     */
    public $status;

    /**
     * @description CADT application
     *
     * @example FYS9VZ535U20V7HT
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'applicationId'   => 'ApplicationId',
        'checklist'       => 'Checklist',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'error'           => 'Error',
        'imageURL'        => 'ImageURL',
        'name'            => 'Name',
        'priceList'       => 'PriceList',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceList'    => 'ResourceList',
        'status'          => 'Status',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->checklist) {
            $res['Checklist'] = [];
            if (null !== $this->checklist && \is_array($this->checklist)) {
                $n = 0;
                foreach ($this->checklist as $item) {
                    $res['Checklist'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
            $res['PriceList'] = [];
            if (null !== $this->priceList && \is_array($this->priceList)) {
                $n = 0;
                foreach ($this->priceList as $item) {
                    $res['PriceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceList) {
            $res['ResourceList'] = [];
            if (null !== $this->resourceList && \is_array($this->resourceList)) {
                $n = 0;
                foreach ($this->resourceList as $item) {
                    $res['ResourceList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Checklist'])) {
            if (!empty($map['Checklist'])) {
                $model->checklist = [];
                $n                = 0;
                foreach ($map['Checklist'] as $item) {
                    $model->checklist[$n++] = null !== $item ? checklist::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
                $n                = 0;
                foreach ($map['PriceList'] as $item) {
                    $model->priceList[$n++] = null !== $item ? priceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n                   = 0;
                foreach ($map['ResourceList'] as $item) {
                    $model->resourceList[$n++] = null !== $item ? resourceList::fromMap($item) : $item;
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
