<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines\supportedEngineVersions\supportedCategorys;

class supportedEngineVersions extends Model
{
    /**
     * @var supportedCategorys[]
     */
    public $supportedCategorys;
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'supportedCategorys' => 'SupportedCategorys',
        'version'            => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->supportedCategorys)) {
            Model::validateArray($this->supportedCategorys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedCategorys) {
            if (\is_array($this->supportedCategorys)) {
                $res['SupportedCategorys'] = [];
                $n1                        = 0;
                foreach ($this->supportedCategorys as $item1) {
                    $res['SupportedCategorys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['SupportedCategorys'])) {
            if (!empty($map['SupportedCategorys'])) {
                $model->supportedCategorys = [];
                $n1                        = 0;
                foreach ($map['SupportedCategorys'] as $item1) {
                    $model->supportedCategorys[$n1++] = supportedCategorys::fromMap($item1);
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
