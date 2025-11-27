<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody;

use AlibabaCloud\Dara\Model;

class DBProxyInstanceMinorVersions extends Model
{
    /**
     * @var string[]
     */
    public $DBProxyInstanceMinorVersions;
    protected $_name = [
        'DBProxyInstanceMinorVersions' => 'DBProxyInstanceMinorVersions',
    ];

    public function validate()
    {
        if (\is_array($this->DBProxyInstanceMinorVersions)) {
            Model::validateArray($this->DBProxyInstanceMinorVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBProxyInstanceMinorVersions) {
            if (\is_array($this->DBProxyInstanceMinorVersions)) {
                $res['DBProxyInstanceMinorVersions'] = [];
                $n1 = 0;
                foreach ($this->DBProxyInstanceMinorVersions as $item1) {
                    $res['DBProxyInstanceMinorVersions'][$n1] = $item1;
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
        if (isset($map['DBProxyInstanceMinorVersions'])) {
            if (!empty($map['DBProxyInstanceMinorVersions'])) {
                $model->DBProxyInstanceMinorVersions = [];
                $n1 = 0;
                foreach ($map['DBProxyInstanceMinorVersions'] as $item1) {
                    $model->DBProxyInstanceMinorVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
