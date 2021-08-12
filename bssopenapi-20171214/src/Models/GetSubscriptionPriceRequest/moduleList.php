<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceRequest;

use AlibabaCloud\Tea\Model;

class moduleList extends Model
{
    /**
     * @var int
     */
    public $moduleStatus;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $config;
    protected $_name = [
        'moduleStatus' => 'ModuleStatus',
        'moduleCode'   => 'ModuleCode',
        'tag'          => 'Tag',
        'config'       => 'Config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleStatus) {
            $res['ModuleStatus'] = $this->moduleStatus;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
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
        if (isset($map['ModuleStatus'])) {
            $model->moduleStatus = $map['ModuleStatus'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        return $model;
    }
}
