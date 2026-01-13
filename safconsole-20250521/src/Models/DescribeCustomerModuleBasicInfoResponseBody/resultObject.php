<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleBasicInfoResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $customerModuleName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $innerModuleName;

    /**
     * @var string
     */
    public $moduleType;

    /**
     * @var string
     */
    public $storePath;
    protected $_name = [
        'customerModuleName' => 'CustomerModuleName',
        'description' => 'Description',
        'innerModuleName' => 'InnerModuleName',
        'moduleType' => 'ModuleType',
        'storePath' => 'StorePath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerModuleName) {
            $res['CustomerModuleName'] = $this->customerModuleName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->innerModuleName) {
            $res['InnerModuleName'] = $this->innerModuleName;
        }

        if (null !== $this->moduleType) {
            $res['ModuleType'] = $this->moduleType;
        }

        if (null !== $this->storePath) {
            $res['StorePath'] = $this->storePath;
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
        if (isset($map['CustomerModuleName'])) {
            $model->customerModuleName = $map['CustomerModuleName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InnerModuleName'])) {
            $model->innerModuleName = $map['InnerModuleName'];
        }

        if (isset($map['ModuleType'])) {
            $model->moduleType = $map['ModuleType'];
        }

        if (isset($map['StorePath'])) {
            $model->storePath = $map['StorePath'];
        }

        return $model;
    }
}
