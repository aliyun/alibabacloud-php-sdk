<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponseBody\data\productions\policyList;

class productions extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $defaultDomain;

    /**
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
     * @var string
     */
    public $ramCode;

    /**
     * @var string
     */
    public $shortName;

    /**
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

    public function validate()
    {
        if (\is_array($this->fullDomains)) {
            Model::validateArray($this->fullDomains);
        }
        if (\is_array($this->policyList)) {
            Model::validateArray($this->policyList);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->fullDomains)) {
                $res['FullDomains'] = [];
                $n1 = 0;
                foreach ($this->fullDomains as $item1) {
                    $res['FullDomains'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policyList) {
            if (\is_array($this->policyList)) {
                $res['PolicyList'] = [];
                $n1 = 0;
                foreach ($this->policyList as $item1) {
                    $res['PolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->versions)) {
                $res['Versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['Versions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->fullDomains = [];
                $n1 = 0;
                foreach ($map['FullDomains'] as $item1) {
                    $model->fullDomains[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['PolicyList'] as $item1) {
                    $model->policyList[$n1] = policyList::fromMap($item1);
                    ++$n1;
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
                $model->versions = [];
                $n1 = 0;
                foreach ($map['Versions'] as $item1) {
                    $model->versions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
