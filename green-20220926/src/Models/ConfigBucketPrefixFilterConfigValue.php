<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class ConfigBucketPrefixFilterConfigValue extends Model
{
    /**
     * @var string
     */
    public $prefixFilterType;

    /**
     * @var string[]
     */
    public $prefixFilters;
    protected $_name = [
        'prefixFilterType' => 'PrefixFilterType',
        'prefixFilters' => 'PrefixFilters',
    ];

    public function validate()
    {
        if (\is_array($this->prefixFilters)) {
            Model::validateArray($this->prefixFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prefixFilterType) {
            $res['PrefixFilterType'] = $this->prefixFilterType;
        }

        if (null !== $this->prefixFilters) {
            if (\is_array($this->prefixFilters)) {
                $res['PrefixFilters'] = [];
                $n1 = 0;
                foreach ($this->prefixFilters as $item1) {
                    $res['PrefixFilters'][$n1] = $item1;
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
        if (isset($map['PrefixFilterType'])) {
            $model->prefixFilterType = $map['PrefixFilterType'];
        }

        if (isset($map['PrefixFilters'])) {
            if (!empty($map['PrefixFilters'])) {
                $model->prefixFilters = [];
                $n1 = 0;
                foreach ($map['PrefixFilters'] as $item1) {
                    $model->prefixFilters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
