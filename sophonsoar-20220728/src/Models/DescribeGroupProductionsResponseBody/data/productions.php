<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponseBody\data;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponseBody\data\productions\policyList;
use AlibabaCloud\Tea\Model;

class productions extends Model
{
    /**
     * @example Rds
     *
     * @var string
     */
    public $code;

    /**
     * @example rds.aliyuncs.com
     *
     * @var string
     */
    public $defaultDomain;

    /**
     * @example 2014-08-15
     *
     * @var string
     */
    public $defaultVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $fullDomains;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $name;

    /**
     * @var policyList[]
     */
    public $policyList;

    /**
     * @example rds
     *
     * @var string
     */
    public $ramCode;

    /**
     * @example RDS
     *
     * @var string
     */
    public $shortName;

    /**
     * @example next
     *
     * @var string
     */
    public $source;

    /**
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'code' => 'Code',
        'defaultDomain' => 'DefaultDomain',
        'defaultVersion' => 'DefaultVersion',
        'description' => 'Description',
        'fullDomains' => 'FullDomains',
        'group' => 'Group',
        'name' => 'Name',
        'policyList' => 'PolicyList',
        'ramCode' => 'RamCode',
        'shortName' => 'ShortName',
        'source' => 'Source',
        'versions' => 'Versions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->defaultDomain) {
            $res['DefaultDomain'] = $this->defaultDomain;
        }
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fullDomains) {
            $res['FullDomains'] = $this->fullDomains;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyList) {
            $res['PolicyList'] = [];
            if (null !== $this->policyList && \is_array($this->policyList)) {
                $n = 0;
                foreach ($this->policyList as $item) {
                    $res['PolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ramCode) {
            $res['RamCode'] = $this->ramCode;
        }
        if (null !== $this->shortName) {
            $res['ShortName'] = $this->shortName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DefaultDomain'])) {
            $model->defaultDomain = $map['DefaultDomain'];
        }
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FullDomains'])) {
            if (!empty($map['FullDomains'])) {
                $model->fullDomains = $map['FullDomains'];
            }
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PolicyList'])) {
            if (!empty($map['PolicyList'])) {
                $model->policyList = [];
                $n = 0;
                foreach ($map['PolicyList'] as $item) {
                    $model->policyList[$n++] = null !== $item ? policyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RamCode'])) {
            $model->ramCode = $map['RamCode'];
        }
        if (isset($map['ShortName'])) {
            $model->shortName = $map['ShortName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = $map['Versions'];
            }
        }

        return $model;
    }
}
