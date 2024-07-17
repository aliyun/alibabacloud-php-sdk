<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph;

use AlibabaCloud\Tea\Model;

class zoneMetas extends Model
{
    /**
     * @description The name of the data center.
     *
     * @example hz_pre_vpc_domain_1
     *
     * @var string
     */
    public $domainInfo;

    /**
     * @description The name of the Query Result Searcher (QRS) worker.
     *
     * @example ha-cn-pl32rf0****_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the service that is used to manage the relationships between online clusters and indexes.
     *
     * @example ha-cn-pl32rf0****_hz_pre_vpc_domain_1
     *
     * @var string
     */
    public $suezAdminName;

    /**
     * @description The tag.
     *
     * @example ha-cn-pl32rf0****_qrs_hz_pre_vpc_domain_1
     *
     * @var string
     */
    public $tag;

    /**
     * @description The node type.
     *
     * @example qrs
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domainInfo'    => 'domainInfo',
        'name'          => 'name',
        'suezAdminName' => 'suezAdminName',
        'tag'           => 'tag',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainInfo) {
            $res['domainInfo'] = $this->domainInfo;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->suezAdminName) {
            $res['suezAdminName'] = $this->suezAdminName;
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
     * @return zoneMetas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domainInfo'])) {
            $model->domainInfo = $map['domainInfo'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['suezAdminName'])) {
            $model->suezAdminName = $map['suezAdminName'];
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
