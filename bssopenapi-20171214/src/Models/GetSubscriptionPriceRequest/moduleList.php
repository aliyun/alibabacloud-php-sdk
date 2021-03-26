<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceRequest;

use AlibabaCloud\Tea\Model;

class moduleList extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var int
     */
    public $moduleStatus;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'config'       => 'Config',
        'moduleCode'   => 'ModuleCode',
        'moduleStatus' => 'ModuleStatus',
        'tag'          => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->moduleStatus) {
            $res['ModuleStatus'] = $this->moduleStatus;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['ModuleStatus'])) {
            $model->moduleStatus = $map['ModuleStatus'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
