<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeNamespaceScopeSidecarConfigResponseBody\configPatches;

use AlibabaCloud\Dara\Model;

class proxyStatsMatcher extends Model
{
    /**
     * @var string[]
     */
    public $inclusionPrefixes;

    /**
     * @var string[]
     */
    public $inclusionRegexps;

    /**
     * @var string[]
     */
    public $inclusionSuffixes;
    protected $_name = [
        'inclusionPrefixes' => 'InclusionPrefixes',
        'inclusionRegexps' => 'InclusionRegexps',
        'inclusionSuffixes' => 'InclusionSuffixes',
    ];

    public function validate()
    {
        if (\is_array($this->inclusionPrefixes)) {
            Model::validateArray($this->inclusionPrefixes);
        }
        if (\is_array($this->inclusionRegexps)) {
            Model::validateArray($this->inclusionRegexps);
        }
        if (\is_array($this->inclusionSuffixes)) {
            Model::validateArray($this->inclusionSuffixes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inclusionPrefixes) {
            if (\is_array($this->inclusionPrefixes)) {
                $res['InclusionPrefixes'] = [];
                $n1 = 0;
                foreach ($this->inclusionPrefixes as $item1) {
                    $res['InclusionPrefixes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inclusionRegexps) {
            if (\is_array($this->inclusionRegexps)) {
                $res['InclusionRegexps'] = [];
                $n1 = 0;
                foreach ($this->inclusionRegexps as $item1) {
                    $res['InclusionRegexps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inclusionSuffixes) {
            if (\is_array($this->inclusionSuffixes)) {
                $res['InclusionSuffixes'] = [];
                $n1 = 0;
                foreach ($this->inclusionSuffixes as $item1) {
                    $res['InclusionSuffixes'][$n1] = $item1;
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
        if (isset($map['InclusionPrefixes'])) {
            if (!empty($map['InclusionPrefixes'])) {
                $model->inclusionPrefixes = [];
                $n1 = 0;
                foreach ($map['InclusionPrefixes'] as $item1) {
                    $model->inclusionPrefixes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InclusionRegexps'])) {
            if (!empty($map['InclusionRegexps'])) {
                $model->inclusionRegexps = [];
                $n1 = 0;
                foreach ($map['InclusionRegexps'] as $item1) {
                    $model->inclusionRegexps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InclusionSuffixes'])) {
            if (!empty($map['InclusionSuffixes'])) {
                $model->inclusionSuffixes = [];
                $n1 = 0;
                foreach ($map['InclusionSuffixes'] as $item1) {
                    $model->inclusionSuffixes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
