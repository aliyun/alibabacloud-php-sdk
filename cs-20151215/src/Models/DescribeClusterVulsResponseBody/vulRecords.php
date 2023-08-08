<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterVulsResponseBody;

use AlibabaCloud\Tea\Model;

class vulRecords extends Model
{
    /**
     * @var string[]
     */
    public $cveList;

    /**
     * @example asap
     *
     * @var string
     */
    public $necessity;

    /**
     * @example 1
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @example np0156da1082b54fa987e32618dd45f5d3
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @example test
     *
     * @var string
     */
    public $nodepoolName;

    /**
     * @var string
     */
    public $vulAliasName;

    /**
     * @example oval:com.redhat.rhsa:def:xxxxxxx
     *
     * @var string
     */
    public $vulName;

    /**
     * @example cve
     *
     * @var string
     */
    public $vulType;
    protected $_name = [
        'cveList'      => 'cve_list',
        'necessity'    => 'necessity',
        'nodeCount'    => 'node_count',
        'nodepoolId'   => 'nodepool_id',
        'nodepoolName' => 'nodepool_name',
        'vulAliasName' => 'vul_alias_name',
        'vulName'      => 'vul_name',
        'vulType'      => 'vul_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cveList) {
            $res['cve_list'] = $this->cveList;
        }
        if (null !== $this->necessity) {
            $res['necessity'] = $this->necessity;
        }
        if (null !== $this->nodeCount) {
            $res['node_count'] = $this->nodeCount;
        }
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->nodepoolName) {
            $res['nodepool_name'] = $this->nodepoolName;
        }
        if (null !== $this->vulAliasName) {
            $res['vul_alias_name'] = $this->vulAliasName;
        }
        if (null !== $this->vulName) {
            $res['vul_name'] = $this->vulName;
        }
        if (null !== $this->vulType) {
            $res['vul_type'] = $this->vulType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cve_list'])) {
            if (!empty($map['cve_list'])) {
                $model->cveList = $map['cve_list'];
            }
        }
        if (isset($map['necessity'])) {
            $model->necessity = $map['necessity'];
        }
        if (isset($map['node_count'])) {
            $model->nodeCount = $map['node_count'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['nodepool_name'])) {
            $model->nodepoolName = $map['nodepool_name'];
        }
        if (isset($map['vul_alias_name'])) {
            $model->vulAliasName = $map['vul_alias_name'];
        }
        if (isset($map['vul_name'])) {
            $model->vulName = $map['vul_name'];
        }
        if (isset($map['vul_type'])) {
            $model->vulType = $map['vul_type'];
        }

        return $model;
    }
}
