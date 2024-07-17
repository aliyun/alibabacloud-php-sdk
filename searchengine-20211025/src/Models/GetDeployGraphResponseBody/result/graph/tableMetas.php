<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph;

use AlibabaCloud\Tea\Model;

class tableMetas extends Model
{
    /**
     * @description The ID of the offline deployment.
     *
     * @example 1
     *
     * @var int
     */
    public $buildDeployId;

    /**
     * @description The name of the data center.
     *
     * @example hz_pre_vpc_domain_1
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The name of the data source.
     *
     * @example ha-cn-pl32rf0****_test_api
     *
     * @var string
     */
    public $name;

    /**
     * @description The deployment ID of the table.
     *
     * @example 2177
     *
     * @var int
     */
    public $tableDeployId;

    /**
     * @description The tag.
     *
     * @example ha-cn-pl32rf0****_test_api_hz_pre_vpc_domain_1
     *
     * @var string
     */
    public $tag;

    /**
     * @description The type of the data source.
     *
     * @example odps
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'buildDeployId' => 'buildDeployId',
        'domainName'    => 'domainName',
        'name'          => 'name',
        'tableDeployId' => 'tableDeployId',
        'tag'           => 'tag',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildDeployId) {
            $res['buildDeployId'] = $this->buildDeployId;
        }
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->tableDeployId) {
            $res['tableDeployId'] = $this->tableDeployId;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableMetas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buildDeployId'])) {
            $model->buildDeployId = $map['buildDeployId'];
        }
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['tableDeployId'])) {
            $model->tableDeployId = $map['tableDeployId'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
